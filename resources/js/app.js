
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios,axios);

import App from './components/App.vue';
import Category from './components/category/Category.vue';


const routes = [
    {
        path:'/',
        name:'Category',
        component:Category
    }
];

const router = new VueRouter({mode:'history',routes:routes});

new Vue(Vue.util.extend({router},App)).$mount('#app');
