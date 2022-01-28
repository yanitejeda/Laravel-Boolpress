import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contact from './pages/Contact.vue';
import Posts from './pages/Posts.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    node:"history",
    routes:[
        {
            path:'/',
            name:'home',
            component: Home,
        },/* 
        {
            path:'/about',
            name:'about',
            component: About,
        },
        {
            path:'/contact',
            name:'contact',
            component: Contact,
        },
        {
            path:'/posts',
            name:'posts',
            component: Posts,
        } */

    ]
})

export default router;