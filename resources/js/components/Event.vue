<template>
    <div>
        <div>
            <SidebarOption :schema="schema" :model="model" :options="formOptions"></SidebarOption>
        </div>

        <b-list-group>
            <b-list-group-item v-for="item in items" :key="item.id" class="d-flex justify-content-between align-items-center text-left">
                <span>
                    <b-icon icon="arrows-fullscreen" aria-hidden="true"></b-icon> {{item.title}}
                </span>
                <div>
                    <a class="schedule-fights text-decoration-none text-light" :href="editEvents(item.id)"><b-button size="sm" variant="secondary">Schedule fights</b-button></a>

                    <b-badge variant="info">{{item.confirmed_fights}} / {{item.number_fights}}</b-badge>
                </div>

            </b-list-group-item>
        </b-list-group>
    </div>
</template>

<script>
import SidebarOption from "./SidebarOption";
export default {
    name: "Event",
    components: { SidebarOption },
    data() {
        return {
            model: {
                title: '',
                subtitle: '',
                number_fights: ''
            },
            schema: {
                groups: [{
                    legend: 'New Event',
                    fields: [{
                        type: 'input',
                        inputType: 'text',
                        label: 'Event name:',
                        model: 'title',
                        required: true,
                        placeholder: "UFC 222",
                        validator: "string"
                    }, {
                        type: 'input',
                        inputType: 'text',
                        label: 'Subtitle:',
                        model: 'subtitle',
                        placeholder: "Fight Night"
                    }, {
                        type: "select",
                        model: 'number_fights',
                        label: "Number of Fights:",
                        required: true,
                        values: [8, 10, 12],
                        validator: "number"
                    }, {
                        type: "submit",
                        buttonText: 'Save',
                        classes: "btn-location",
                        validateBeforeSubmit: true,
                        onSubmit: this.formSubmit
                    }]
                }],
            },
            formOptions: {
                validateAfterLoad: true,
                validateAfterChanged: true,
                validateAsync: true
            },
            items: []
        };
    },
    mounted() {
        this.listItens();
    },
    methods: {
        formSubmit(){
            axios.post('/api/events', { data : this.model })
                .then( (response) => {
                    if(response.data.status == true){
                        this.cleanForm();
                        this.makeToast(`Event ${response.data.model.title} created!`, 'Success');
                    }else{
                        this.makeToast(response.data.message, 'Ops', 'warning');
                    }
                }).catch( (response) =>{
                    console.log(response);
                });
        },
        cleanForm(){
            this.model.title = '';
            this.model.subtitle = '';
            this.model.number_fights = '';
        },
        makeToast(message, title, type = 'success') {
            this.$bvToast.toast(message, {
                title: title,
                solid: true,
                autoHideDelay: 3000,
                variant: type
            })
        },
        listItens() {
            axios.get('/api/events')
                .then( (response) => {
                    this.items = response.data.data;
                    console.log(response);
                }).catch( (response) =>{
                    console.error(response)
                });
        },
        editEvents(event_id) {
            return route('events.edit',event_id)
        }
    },
}
</script>

<style scoped>
    .list-group-item {
        color: #eee;
        background-color: #666 !important;
    }
    a.schedule-fights {

    }

</style>
