
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('promotion', require('./components/Promotion.vue'));
Vue.component('scheduled-promotions', require('./components/ScheduledPromotions.vue'));
Vue.component('this-weeks-promotion', require('./components/ThisWeeksPromotion.vue'));
Vue.component('last-weeks-promotion', require('./components/LastWeeksPromotion.vue'));


const app = new Vue({
    el: '#app'
});
