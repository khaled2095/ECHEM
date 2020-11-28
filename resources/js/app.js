window.Vue = require('vue');

import Vuex from 'vuex'
import storeVuex from './store/index'
import filter from './filter'

Vue.use(Vuex)

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

const store = new Vuex.Store(storeVuex)

Vue.component('main-app', require('./components/MainApp.vue').default);

//window.moment = require('moment'); // require

require('./bootstrap');
$(".subnav-trigger").click(function() {
    $("#subnav").toggle();
});


const app = new Vue({
    el: '#app',
    store
});
    // data: {
    //     messages: [],
    //     newMessage: ''
    // },

    // created() {
    //     this.fetchMessages();

    //     Echo.private('chat')
    //         .listen('MessageSentEvent', (e) => {
    //             this.messages.push({
    //                 message: e.message.message,
    //                 user: e.user
    //             });
    //         });
    // },

    // methods: {
    //     fetchMessages() {
    //         axios.get('/messages').then(response => {
    //             this.messages = response.data;
    //         });
    //     },

    //     addMessage(message) {
    //         axios.post('/messages', {
    //             message
    //         }).then(response => {
    //             this.messages.push({
    //                 message: response.data.message.message,
    //                 user: response.data.user
    //             });
    //         });
    //     },

    //     sendMessage() {
    //         this.addMessage(this.newMessage);
    //         this.newMessage = '';
    //     }
    // }

