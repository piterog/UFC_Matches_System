require('./bootstrap');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('teste-component', require('./components/Teste.vue').default);
Vue.component('navbar-component', require('./components/Navbar.vue').default);
Vue.component('match-component', require('./components/Match.vue').default);
Vue.component('Fight', require('./components/Fight.vue').default);
Vue.component('EventTitle', require('./components/Match.vue').default);

window.Vue = require('vue');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

new Vue().$mount('#app')

