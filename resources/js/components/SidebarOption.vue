<template>
    <div>
        <b-button v-b-toggle.sidebar-variant>Toggle Sidebar</b-button>
        <b-sidebar id="sidebar-variant" :title="title" bg-variant="dark" text-variant="light" shadow backdrop>
            <div class="px-3 py-2">
                <p>
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
            </div>
        </b-sidebar>
    </div>
</template>

<script>
export default {
    name: "SidebarOption",
    data() {
        return {
            title : 'teste'
        }
    }
}
</script>

<style scoped>

</style>
