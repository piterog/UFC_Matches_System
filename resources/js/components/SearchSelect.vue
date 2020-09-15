<template>
    <div>
        <model-select @change="aa" :options="lists" v-model="item" name="1" placeholder="< select fighters >"> </model-select>
    </div>
</template>

<script>
import { ModelSelect } from 'vue-search-select'
export default {
    name: "SearchSelect",
    components: { ModelSelect },
    data() {
        return {
            item: {}
        }
    },
    props: ['lists', 'model'],
    methods: {
        aa(){
            alert("AAA");
        }
    }
}
</script>

<style scoped lang="scss">
    .selection.dropdown{
        background-color: rgba(255,255,255,0);
        color: white;
        border: 0;

        &:hover{
             border-bottom: 1px dashed #888;
        }
    }

    i {
        display: none !important;
    }
</style>
