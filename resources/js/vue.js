// VueJS
import Vue from 'vue'
import MineSocial from './MineSocial.vue'
import store from './store'

// Router
import VueRouter from 'vue-router'
import Router from './router'
Vue.use(VueRouter);

// Custom Dialogs
// import Dialogs from './dialogs'
// Vue.prototype.$dialog = Dialogs

// Font Awesome
import { FontAwesomeIcon } from './fontawesome'
Vue.component('font-awesome-icon', FontAwesomeIcon);

//Filers
// Common Filter
Vue.filter('formatDate', function(value) {
    if(/^\d+$/.test(value)) value = +value;
    let date = new Date(value);
    let formatDate = `${date.getFullYear()}-${('0' + (date.getMonth()+1)).slice(-2)}-${('0' + date.getDate()).slice(-2)}`;
    let formatTime = `${('0' + date.getHours()).slice(-2)}:${('0' + date.getMinutes()).slice(-2)}`
    return `${formatDate} ${formatTime}`
});

Vue.config.productionTip = false

new Vue({
    render: h => h(MineSocial),
    store,
    router: Router
}).$mount('#app')