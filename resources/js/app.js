require('./bootstrap');

Vue.component('Event', require('./components/Event.vue').default);
Vue.component('Fight', require('./components/Fight.vue').default);
Vue.component('Match', require('./components/Match.vue').default);
Vue.component('Navbar', require('./components/Navbar.vue').default);
Vue.component('SidebarOption', require('./components/SidebarOption.vue').default);

window.Vue = require('vue');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueFormGenerator from 'vue-form-generator'
import 'vue-form-generator/dist/vfg.css'

Vue.use(BootstrapVue)
Vue.use(VueFormGenerator)

new Vue().$mount('#app')


