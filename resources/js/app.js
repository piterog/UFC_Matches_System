require('./bootstrap');

Vue.component('Navbar', require('./components/Navbar.vue').default);
Vue.component('Match', require('./components/Match.vue').default);
Vue.component('Fight', require('./components/Fight.vue').default);
Vue.component('sidebaroption', require('./components/SidebarOption.vue').default);

window.Vue = require('vue');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

new Vue().$mount('#app')

