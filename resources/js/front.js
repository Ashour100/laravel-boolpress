
window.axios=require('axios');
window.axios.defaults.headers.common['X-Reuested-With']='XMLHttpRequest';
window.Vue = require('vue');

import Vue from "vue";
import VueRouter from "vue-router";
import App from "./views/App";

Vue.use(VueRouter);

import Posts from './pages/Posts';

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/posts',
            name:'posts',
            component:Posts
        }
]
})

const app = new Vue({
    el: '#root',
    render: h=>h(App),
    router,
});
