require('./bootstrap');
import Vue from 'vue'
import App from './vue/shipment'

const shipment = new Vue({
    el:'#app',
    components:{App}
})


