
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//import ElementUI from 'element-ui';
//import locale from 'element-ui/lib/locale/lang/es';
//window.Vue.use(ElementUI, {locale});
//const app = new Vue({el: '#app'});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router';

window.Vue.use( VueRouter);

import PropertiesIndex  from './components/properties/PropertiesIndex.vue';
import PropertiesCreate from './components/properties/PropertiesCreate.vue';
import PropertiesEdit   from './components/properties/PropertiesEdit.vue';


const routes = [
    {
        path: '/',
        components: {
            propertiesIndex : PropertiesIndex
        }
    },
    {
        path: '/properties/create',
        components:{
            propertiesCreate: PropertiesCreate
        }
    },
    {
        path: '/properties/edit',
        components:{
            propertiesEdit: PropertiesEdit
        }
    }
]

const router = new VueRouter({routes})

const app = new Vue({router}).$mount('#app')