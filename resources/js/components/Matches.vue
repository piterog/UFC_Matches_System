<template>
    <div class="m-0 p-0">
        <MainEvent :title="lowerTitle" :subtitle="subtitle"></MainEvent>
        <div v-for="(fight, index) in fights">
            <Fight :empty="fight.empty" :category="fight.category" :index="index"
                   :fighter1="fight.r_name" :cartel1="fight.r_cartel"
                   :fighter2="fight.b_name" :cartel2="fight.b_cartel"
                   :order="fight.order" :rank="fight.rank" :human="fight.human_player"
                   :fighters="fighters">
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
    name: "Matches",
    data(){
        return {
            title: '',
            subtitle: '',
            number_fights: [],
            fights: [],
        }
    },
    mounted(){
        this.loadEvent();
        this.getAllFighters();
    },
    props: ['event', 'edit'],
    computed: {
        lowerTitle(){
            return this.title.toLowerCase();
        }
    },
    methods: {
        async loadEvent() {
            axios.get(`/api/events/${this.event.id}`)
                .then( (response) => {
                    let data = response.data.data;
                    this.title = data.title;
                    this.subtitle = data.subtitle;
                    this.loadFights(data.id);
                }).catch( (response) =>{
                    console.error(response);
                });
        },
        async loadFights(event_id) {
            axios.post('/api/matches/event/'+event_id)
                .then( (response) => {
                    let data = response.data.data;
                    this.formatFights(data);

                }).catch( (response) =>{
                    console.error(response);
                });
        },
        formatFights(fights){
            for(let i = 0; i < this.event.number_fights; i++){
                fights[i] === undefined
                    ? this.fights.push({empty : true})
                    : this.fights.push({
                        category: fights[i].category ? fights[i].category.description : '',
                        r_name: fights[i].red_corner ? fights[i].red_corner.name : '',
                        r_cartel: fights[i].red_corner ? fights[i].red_corner.cartel : '',
                        b_name: fights[i].blue_corner ? fights[i].blue_corner.name : '',
                        b_cartel: fights[i].blue_corner ? fights[i].blue_corner.cartel : '',
                        order: fights[i].order ?? '',
                        rank: fights[i].rank ?? '',
                        human_player: fights[i].human_player ?? ''
                    });
            }
        },
        async getAllFighters(){
            axios.get('/api/fighters')
                .then( (response) => {
                    let data = response.data.data;
                    this.fighters = data;
                }).catch( (response) =>{
                console.error(response);
            });
        }
    }
}
</script>

<style scoped>

</style>
