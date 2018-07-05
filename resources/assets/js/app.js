require('./bootstrap');
require('./owner');
require('./patient');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

var app = new Vue({
    el: '#app'
});
