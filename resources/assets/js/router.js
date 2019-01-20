
import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import index from './components/index.vue'
import about from './components/about.vue'
import post from './components/post.vue'
import single from './components/single.vue'
import edit from './components/edit.vue'
import remove from './components/remove.vue'
import search from './components/search.vue'



export default new Router({
    routes: [
        {
            path: '/',
            name: 'index',
            component: index
        },
      
        {
            path: '/about',
            name: 'about',
            component: about
        },
       
        {
            path: '/post',
            name: 'post',
            component: post,
            meta:{
                auth: true
            }
        },
        {
            path: '/single/:id',
            name: 'single',
            component: single
        },
        {
            path: '/edit/:id',
            name: 'edit',
            component: edit
        },
        {
            path: '/remove/:id',
            name: 'remove',
            component: remove
        },
        {
            path: '/search/:query',
            name: 'search',
            component: search
        },
    ]
})



