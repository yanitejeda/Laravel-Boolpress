import Vue from 'vue';
import VueRouter from 'vue-router';

 

import Home from '../js/components/pages/Home.vue';
import About from '../js/components/pages/About.vue'
import Contact from '../js/components/pages/Contact.vue'



Vue.use(VueRouter);

const router = new VueRouter({
    node:"history",
    routes:[
        {
            path:'/',
            name:'home',
            component: Home,
        },
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
       

    ]
})

export default router;