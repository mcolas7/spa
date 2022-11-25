require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/app.vue';
import DogsIndex from './components/dogs/index.vue';
import DogsCreate from './components/dogs/create.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [ {
        path: '/',
        component: DogsIndex,
        name: 'dogs.index'
    }, {
        path: '/dogs/create',
        component: DogsCreate,
        name: 'dogs.create'
    }
         
    ]
})

// Vue.component('dogs-index', DogsIndex);

Vue.component('pagination', require('laravel-vue-pagination'))

const app = new Vue({
    el: '#app',
    components: { App },
    router
});
