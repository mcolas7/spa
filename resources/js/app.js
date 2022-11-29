require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueSweetalert2 from 'vue-sweetalert2';
import "sweetalert2/dist/sweetalert2.min.css";
import App from './components/app.vue';
import DogsIndex from './components/dogs/index.vue';
import DogsCreate from './components/dogs/create.vue';
import DogsEdit from './components/dogs/edit.vue';

Vue.use(VueRouter);
Vue.use(VueSweetalert2);

const router = new VueRouter({
    mode: 'history',
    routes: [ {
        path: '/',
        component: DogsIndex,
        name: 'dogs.index'
    }, 
    {
        path: '/dogs/create',
        component: DogsCreate,
        name: 'dogs.create'
    }, 
    {
        path: '/dogs/edit/:id',
        component: DogsEdit,
        name: 'dogs.edit'
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
