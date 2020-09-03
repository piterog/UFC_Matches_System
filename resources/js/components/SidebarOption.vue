<template>
    <div>
        <b-button v-b-toggle.sidebar-variant>Toggle Sidebar</b-button>
        <b-sidebar id="sidebar-variant" bg-variant="dark" text-variant="light" shadow backdrop right>
            <div class="px-3 py-2">
                <vue-form-generator :schema="schema" :model="model" :options="formOptions"> </vue-form-generator>
            </div>
        </b-sidebar>
    </div>
</template>

<script>
export default {
    name: "SidebarOption",
    data() {
        return { }
    },
    props: ['schema', 'formOptions', 'model']
}
</script>

<style scoped>

</style>
