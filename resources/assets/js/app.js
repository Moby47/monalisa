
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/* ------------------------- Imports -------------------- */

//vee validate
import Vue from 'vue';
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

//toated
// register the plugin on vue
import Toasted from 'vue-toasted';
Vue.use(Toasted)
// you can also pass options, check options reference below
//Vue.use(Toasted, Options)

//animate.css
require('vue2-animate/dist/vue2-animate.min.css')

//vur router
import router from './router'

import VModal from 'vue-js-modal'
 
Vue.use(VModal)

/* ------------------------- Imports -------------------- */

/* route middleware */
router.beforeEach(
    (to, from, next) => {
        if(to.matched.some(record => record.meta.auth)){
            console.log('in middleware');
if(localStorage.getItem('token')){
    //do nothing
    console.log('yes token. access granted');
    next()
}else{
    //redirect to index
    console.log('no token. protected page');
    next({path: '/'})
} //inner if close

        }else{
            console.log('no auth required for this page');
            next()
        } //main if close

    } //func closure
) //router close
/* route middleware */


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('index', require('./components/index.vue'));
Vue.component('about', require('./components/about.vue'));
Vue.component('post', require('./components/post.vue'));
//Vue.component('single', require('./components/single.vue'));

//no routes
Vue.component('menubar', require('./components/menubar.vue'));
Vue.component('foot', require('./components/foot.vue'));







const app = new Vue({
    el: '#app',
    router
});
