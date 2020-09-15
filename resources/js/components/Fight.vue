<template>
    <b-container fluid class="p-0 m-0" v-if="!empty">
        <div :class="[isMainEvent, isEven, 'fight-card']">
            <b-row class="justify-content-md-center">
                <span class="category font-weight-bold">{{ category }}</span>
            </b-row>
            <b-row class="justify-content-md-center">
                <b-col col lg="4" class="text-right">
                    <b-row>
                        <b-col>
                            <span>{{ fighter1 }}</span>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col class="cartel">
                            <small>[ {{ cartel1 }} ]</small>
                        </b-col>
                    </b-row>
                </b-col>
                <b-col cols="12" md="auto">vs</b-col>
                <b-col col lg="4" class="text-left">
                    <b-row>
                        <b-col>
                            <span>{{ fighter2 }}</span>
                        </b-col>
                    </b-row>
                    <b-row>
                        <b-col class="cartel">
                            <small>[ {{ cartel2 }}]</small>
                        </b-col>
                    </b-row>
                </b-col>
            </b-row>
        </div>
    </b-container>

    <b-container fluid class="p-0 m-0" v-else>
        <div class="controls">
            <div @click="aprove" class="check"></div>
            <div @click="reprove" class="remove"></div>
        </div>
        <div :class="[isEven, 'fight-card', 'select']">
            <b-row class="justify-content-md-center">
                <b-row class="justify-content-md-center" v-show="fighter_select">
                    <span class="category font-weight-bold">{{ selected_category_description }}</span>
                </b-row>
                <b-form-select @change="getSelectedItem" v-show="!fighter_select" v-model="category_selected" :options="category_list" plain class="mt-2"></b-form-select>
            </b-row>
            <b-row class="justify-content-md-center" v-show="fighter_select">
                <b-col col lg="4" class="text-right">
                    <search-select :lists="options" :model="item"></search-select>
                </b-col>
                <b-col cols="12" md="auto">vs</b-col>
                <b-col col lg="4" class="text-left">
                    <search-select :lists="options" :model="item"></search-select>
                </b-col>
            </b-row>
        </div>
    </b-container>

</template>

<script>
import SearchSelect from "./SearchSelect";
import { ModelSelect } from 'vue-search-select'

export default {
    name: "Fight",
    components: { SearchSelect, ModelSelect },
    data(){
        return {
            options: [],
            item: {
                value: '',
                text: ''
            },
            item2: {
                value: '',
                text: ''
            },
            fighter_select: false,
            category_list: [],
            category_selected: 0,
            selected_category_description: '',
        }
    },
    props: {
        category: {
            type: String
        },
        fighter1: {
            type: String
        },
        fighter2: {
            type: String
        },
        cartel1: {
            type: String
        },
        cartel2: {
            type: String
        },
        order: {
            type: Number
        },
        rank: {
            type: [Number, String]
        },
        human: {
            type: [Number, String]
        },
        empty: {
            type: Boolean,
            default: false
        },
        index: {
            type: Number,
            require: true
        },
        fighters: {
            type: Array,
            require: true
        }
    },
    mounted() {
        this.categoryList();
        this.filterFightersList();
    },
    computed: {
        isMainEvent(){
            return (this.order == 1) ? 'main-event' : '';
        },
        isEven(){
            return (this.index % 2 == 0) ? 'even' : '';
        },
    },
    methods: {
        aprove(){
            console.log(this.options)
        },
        reprove(){

        },
        getSelectedItem(id){
            if(id > 0){
                this.selected_category = this.category_list[id].text;
                this.fighter_select = true;

                let fightersFiltered = this.fighters.filter( (fighter) => {
                    return fighter.categories.find( categorie => categorie.id == id) != undefined
                });
                this.options = [];

                fightersFiltered.forEach( (element, index) => {
                    this.options.push({value: element.id, text: element.name});
                });
            }else{
                this.fighter_select = false;
            }
        },
        toggleFighterSelect(){
            this.fighter_select = ! this.fighter_select
        },
        categoryList(){
            axios.get('/api/categories')
                .then( (response) => {
                    let data = response.data.data;
                    this.category_list.push({text: '< choose a category > ', value: 0});
                    for(let key in data){
                        this.category_list.push({ text: data[key].description, value: data[key].id, genre: data[key].genre });
                    }
                }).catch( (response) =>{
                    console.error(response);
                });
        },
        filterFightersList(){
            // console.log(this.fighters);
        }
    }

}
</script>

<style lang="scss">
    $cardHeight: 75px;

    .controls{
        height: $cardHeight;
        width: 35px;
        position: absolute;

        .check{
            background-color: green;
            height: $cardHeight/2;
            cursor: pointer;
        }

        .remove{
            background-color: red;
            height: $cardHeight/2;
            cursor: pointer;
        }
    }

    .fight-card{
        padding: 15px 0;
        background-color: #545454;
        height: $cardHeight;
    }

    .category{
        font-family: RobotoBold;
        line-height: 3px;
        font-size: .8rem;
    }

    .main-event{
        font-size: 1.3rem;
        background-color: #333333 !important;
    }

    .cartel{
        line-height: 6px;
    }

    .even{
        background-color: #494949;
    }

    .select{
        select.form-control{
            width: unset;
            border: none;
            background-color: rgb(255 255 255 / 0);
            color: #888;
            padding: 0px 25px;
            -webkit-appearance: none;
            appearance: none;
            text-indent: 10px;
            text-overflow: '';

            &:hover{
                color: #777;
                border-bottom: 2px dashed;
                padding-bottom: 0;
                cursor: pointer;
            }
        }
        li.F a {
            background-color: rgba(249,129,129,0.33);
        }
        li.M a {
            background-color: rgba(0,129,249,0.33);
        }
    }
</style>
