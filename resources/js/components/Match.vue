<template>
    <div class="m-0 p-0">
        <MainEvent :title="lowerTitle" :subtitle="subtitle"></MainEvent>
        <div v-for="fight in fights">
            <Fight :category="fight.category.description"
                   :fighter1="fight.red_corner.name" :cartel1="fight.red_corner.cartel"
                   :fighter2="fight.blue_corner.name" :cartel2="fight.blue_corner.cartel"
                   :order="fight.order" :rank="fight.rank" :human="fight.human_player">
            </Fight>
        </div>
    </div>
</template>

<script>
import MainEvent from './EventTitle.vue'

export default {
    components: {
        MainEvent
    },
    name: "Match",
    data(){
        return {
            title: '',
            subtitle: '',
            fights: []
        }
    },
    mounted(){
        this.title = 'Ufc 254';
        this.subtitle = 'Adesaynya vs Borrachinha';
        this.loadEvent();
    },
    computed: {
        lowerTitle(){
            return this.title.toLowerCase();
        }
    },
    methods: {
        async loadEvent() {
            axios.post('/api/events/1')
                .then( (response) => {
                    let data = response.data.data;
                    this.title = data.title;
                    this.subtitle = data.subtitle;
                    this.loadFights(data.id);
                }).catch( (response) =>{
                    console.log(response);
                });
        },
        async loadFights(event_id) {
            axios.post('/api/matches/event/'+event_id)
                .then( (response) => {
                    let data = response.data.data;
                    this.fights = data;
                    console.log(data);
                }).catch( (response) =>{
                    console.log(response);
                });
        }
    }

}
</script>

<style scoped>

</style>
