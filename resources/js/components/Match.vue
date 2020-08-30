<template>
    <div class="m-0 p-0">
        <MainEvent :title="lowerTitle" :subtitle="subtitle"></MainEvent>
        <b-row class="justify-content-md-center">
            <b-col col lg="2">1 of 3</b-col>
            <b-col cols="12" md="auto">Variable width content</b-col>
            <b-col col lg="2">3 of 3</b-col>
        </b-row>
    </div>
</template>

<script>
import MainEvent from './MainEvent.vue'

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
    computed : {
        lowerTitle(){
            return this.title.toLowerCase();
        }
    }

}
</script>

<style scoped>

</style>
