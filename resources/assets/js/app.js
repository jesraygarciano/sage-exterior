// import App from './App.vue'
// import router from './router'
// import store from './store'
// import './registerServiceWorker'

import Vue from 'vue'
// Import IE polyfill for Vue
import "babel-polyfill";
import Card from './components/Card/unick-card.vue'
import Card2 from './components/Card/unick-card2.vue'


// Require bootstrapped js
require('./bootstrap');


import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

require('./custom-js/navbar.js')
require('./custom-js/gallery.js')

Vue.component('hello-world', require('./components/HelloWorld.vue'));
Vue.component('unick-card', Card);
Vue.component('unick-card2', Card2);

var loaded = false;

// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        document.body.style.opacity = '1'
        loaded = true;
    }
    if(loaded){
        clearInterval(interval);
    }
}, 100);

const app = new Vue({
    el: '#app'
});