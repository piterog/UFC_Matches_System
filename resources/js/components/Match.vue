<template>
    <div class="m-0 p-0">
        <MainEvent :title="lowerTitle" :subtitle="subtitle"></MainEvent>
<!--        <Fight></Fight>-->
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
            subtitle: ''
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
