import Vue from 'vue';
import VueRouter from 'vue-router';

 

import Home from '../js/components/pages/Home.vue';
import About from '../js/components/pages/About.vue'
import Contact from '../js/components/pages/Contact.vue'
import ShowPost from '../js/components/pages/post/Show.vue';



Vue.use(VueRouter);

const router = new VueRouter({
    mode:"history",
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
        {

            //parametro dinamico id da sostituire con slug
            path:'/posts/:id',
            name:'posts.show',
            component: ShowPost,
        },
       

    ]
})

export default router;