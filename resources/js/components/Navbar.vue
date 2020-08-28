<template>
    <div>
        <b-navbar toggleable="lg" type="danger" sticky="true" variant="dark">
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav class="d-flex justify-content-center">
                <b-navbar-nav>
                    <b-nav-item href="#">Fighters</b-nav-item>
                    <b-nav-item href="#">Categories</b-nav-item>
                    <b-nav-item href="#">Champions</b-nav-item>
                    <b-nav-item href="#">Events</b-nav-item>
                    <b-nav-item href="#">Matches</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
export default {
name: "Navbar"
}
</script>

<style scoped>

</style>
