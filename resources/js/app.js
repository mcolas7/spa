require('./bootstrap');

import Vue from 'vue';
import DogsIndex from './components/dogs/index.vue';
import { Pagination } from 'laravel-vue-pagination';

Vue.component('dogs-index', DogsIndex);

Vue.component('pagination', Pagination);

const app = new Vue({
    el: '#app'
});
