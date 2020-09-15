require('./bootstrap');

Vue.component('DropdownSelect', require('./components/DropdownSelect.vue').default);
Vue.component('Event', require('./components/Event.vue').default);
Vue.component('Fight', require('./components/Fight.vue').default);
Vue.component('Matches', require('./components/Matches.vue').default);
Vue.component('Navbar', require('./components/Navbar.vue').default);
Vue.component('SearchSelect', require('./components/SearchSelect.vue').default);
Vue.component('SidebarOption', require('./components/SidebarOption.vue').default);

window.Vue = require('vue');

import Vue from 'vue'
import Vuex from 'vuex'
import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue'
import VueFormGenerator from 'vue-form-generator'
import 'vue-form-generator/dist/vfg.css'
import route from 'ziggy-js';
import { Ziggy } from 'ziggy-js';
import * as VueSearchSelect from 'vue-search-select'
import 'vue-search-select/dist/VueSearchSelect.css'

Vue.use(Vuex)
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)
Vue.use(VueFormGenerator)
Vue.use(VueSearchSelect)

new Vue().$mount('#app')

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});
