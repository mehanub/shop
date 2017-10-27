
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css' 

require('./bootstrap');

window.Vue = require('vue');

Vue.use(Vuetify)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('example', require('./components/Example.vue'));
Vue.component('shoptoolbar',require('./components/shop/toolbar.vue'))
Vue.component('carousel',require('./components/shop/carousel.vue'))
Vue.component('shop-card',require('./components/shop/card.vue'))
Vue.component('left-menu',require('./components/shop/left-menu.vue'))
Vue.component('left-bottom-menu',require('./components/shop/left-bottom-menu.vue'))
Vue.component('shop-pagination',require('./components/shop/pagination.vue'))

const app = new Vue({
    el: '#app',
      
});
