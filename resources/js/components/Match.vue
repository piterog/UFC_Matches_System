<template>
    <div class="m-0 p-0">
        <MainEvent :title="lowerTitle" :subtitle="subtitle"></MainEvent>
        <Fight></Fight>
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
    },
    computed: {
        lowerTitle(){
            return this.title.toLowerCase();
        }
    },
    methods: {
        loadFights() {
            axios.post('/api/')
        }
    }

}
</script>

<style scoped>

</style>
