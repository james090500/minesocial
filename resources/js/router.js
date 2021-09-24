import VueRouter from 'vue-router'

//Home Pages
import HomePage from '@/pages/HomePage.vue'

//Account
import LoginPage from '@/pages/account/LoginPage.vue'
// import RegisterPage from '@/pages/account/Register.vue'

//user
import ProfilePage from '@/pages/ProfilePage.vue'

//posts
// import ViewPost from '@/pages/posts/ViewPost.vue'


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

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')
    if (to.matched.some(record => record.meta.auth) && !loggedIn) {
        next('/account/login')
        return
    }
    halfmoon.deactivateAllDropdownToggles()
    next()
})

export default router;