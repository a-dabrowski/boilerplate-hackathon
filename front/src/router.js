import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Scanner from './views/Scanner.vue'
import Social from './views/GoogleSocial.vue'

Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/auth/google/callback',
            name: 'social',
            component: Social
        },
        {
            path: '/scanner',
            name: 'scanner',
            component: Scanner
        },
        {
            path: '/about',
            name: 'about',
            // route level code-splitting
            // this generates a separate chunk (about.[hash].js) for this route
            // which is lazy-loaded when the route is visited.
            component: () =>
                import(/* webpackChunkName: "about" */ './views/About.vue')
        }
    ]
})
