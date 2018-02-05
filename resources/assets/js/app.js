
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Configure AJAX endpoints
 */

window.ajaxBase = 'api';
window.ajaxPersonBase = window.ajaxBase + '/persons';

/**
 * Configure AJAX headers
 */

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('persons', require('./components/PersonsComponent.vue'));
Vue.component('person', require('./components/PersonComponent.vue'));
Vue.component('likes', require('./components/LikesComponent.vue'));
Vue.component('like', require('./components/LikeComponent.vue'));
Vue.component('dislikes', require('./components/DislikesComponent.vue'));
Vue.component('dislike', require('./components/DislikeComponent.vue'));

const app = new Vue({
    el: '#app'
});
