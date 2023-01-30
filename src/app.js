// Axios
import axios from 'axios';
window.axios = axios;

// Themes & Bootstrap
import Collapse from 'bootstrap/js/dist/collapse'
import Dropdown from 'bootstrap/js/dist/dropdown'
import Modal from 'bootstrap/js/dist/modal'
window.bootstrap = { Collapse, Dropdown, Modal }

// Vue
import { createApp } from 'vue';

// Create the app
import MineSocial from '@/views/MineSocial.vue'
const app = createApp(MineSocial)

// VueX
import Store from './store'
app.use(Store);

//Router
import Router from './router'
app.use(Router);

// Font Awesome
import { FontAwesomeIcon, FontAwesomeLayers } from './fontawesome'
app.component('FontAwesomeIcon', FontAwesomeIcon);
app.component('FontAwesomeLayers', FontAwesomeLayers);

// Mount the app
app.mount('#app')