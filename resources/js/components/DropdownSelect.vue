<template>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle"
                :class="id"
                ref="dropdown"
                type="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            {{selected.text}}
        </button>
        <div class="dropdown-menu" :aria-labelledby="id">
            <a class="dropdown-item"
               href="#"
               v-for="option in options"
               @click="selected = option">
                {{option.text}}
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "DropdownSelect",
    props:["options", "value"],
    computed:{
        selected:{
            get() {return this.value},
            set(v){this.$emit("input", v)}
        },
        id(){
            return `dropdown-${this._uid}`
        }
    },
    mounted(){
        $(this.$refs.dropdown).dropdown()
    }
}
</script>

<style scoped>

</style>
