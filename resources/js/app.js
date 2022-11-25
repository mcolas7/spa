require('./bootstrap');

import Vue from 'vue';
import CommentsIndex from './components/comments/index.vue';
Vue.component('comments-index', CommentsIndex);

// window.Vue = require('vue').default;

// Vue.component('comments-index', require('./components/comments/index.vue')).default;

const app = new Vue({
    el: '#app'
});
