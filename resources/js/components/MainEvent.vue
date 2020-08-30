<template>
    <div class="fluid text-center">
        <div class="title">
            <h1>{{ title }}</h1>
        </div>
        <div class="sub-title">
            <h2>{{ subtitle }}</h2>
        </div>
    </div>
</template>

<script>
export default {
    name: "MainEvent",
    props: {
        title: {
            type: String,
            required: true
        },
        subtitle: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>
    h1, h2{
        margin: 0;
        padding: 0;
    }

    h1{
        font-family: DreamMMA;
        font-size: 2rem;
    }

    h2{
        font-family: Mikodacs;
        font-size: 2rem;
    }

    .title{
        background-color: #a62222;
    }

    .sub-title{
        background-color: #c62828;
    }

</style>
