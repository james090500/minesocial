import { createRouter, createWebHistory } from 'vue-router'

//Home Pages
import HomePage from '@/views/pages/HomePage.vue'

//Account
import LoginPage from '@/views/pages/account/LoginPage.vue'
// import RegisterPage from '@/views/pages/account/Register.vue'

//user
import ProfilePage from '@/views/pages/ProfilePage.vue'

//posts
// import ViewPost from '@/views/pages/posts/ViewPost.vue'


const routes = [
    {
        path: '/',
        name: 'home',
        meta: {
            title: 'Home',
            auth: true
        },
        component: HomePage
    },
    {
        path: '/profile/:uuid',
        name: 'profile',
        meta: {
            auth: true
        },
        component: ProfilePage
    },
    {
        path: '/account/login',
        name: 'account-login',
        meta: {
            title: 'Login Page'
        },
        component: LoginPage
    },
]

const router = new createRouter({
    history: createWebHistory(),
    routes: routes,
    linkActiveClass: 'active',
    scrollBehavior(_to, _from, _savedPosition) {
        return { top: 0 }
    }
})

router.beforeEach((to, from, next) => {
    // const loggedIn = localStorage.getItem('user')
    // if (to.matched.some(record => record.meta.auth) && !loggedIn) {
    //     next('/account/login')
    // } else {
    //     next()
    // }
    next();
})

export default router;