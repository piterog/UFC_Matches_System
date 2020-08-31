<template>
    <b-container fluid class="bg-light">
        <b-row class="justify-content-md-center">
            <span calss="category">{{ category }}</span>
        </b-row>
        <b-row class="justify-content-md-center">
            <b-col col lg="4" class="text-right">
                <b-row>
                    <b-col>
                        <span>{{ fighter2 }}</span>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <span> {{ cartel1 }}</span>
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
                    <b-col>
                        <span>{{ cartel2 }}</span>
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    name: "Fight",
    props: {
        category: {
            type: String,
            required: true
        },
        fighter1: {
            type: String,
            required: true
        },
        fighter2: {
            type: String,
            required: true
        },
        cartel1: {
            type: String,
            required: true
        },
        cartel2: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>
    .category{
        font-family: Roboto;
    }
</style>
