import VueRouter from 'vue-router'

//Home Pages
import HomePage from '@/pages/HomePage.vue'

//Account
import LoginPage from '@/pages/account/LoginPage.vue'
// import RegisterPage from '@/pages/account/Register.vue'

//user
// import ProfilePage from '@/pages/profile/ProfilePage.vue'

//posts
// import ViewPost from '@/pages/posts/ViewPost.vue'


const routes = [
    {
        path: '/',
        name: 'home',
        meta: {
            title: 'Home'
        },
        component: HomePage
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

export default router;