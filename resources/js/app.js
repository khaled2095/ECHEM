window.Vue = require('vue');

import Vuex from 'vuex'
import storeVuex from './store/index'
import filter from './filter'
import firebase from 'firebase'

// Required for side-effects
require("firebase/firestore");


// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBEBVPPLSzybaWFuDZlbssHYuU54_Dumac",
  authDomain: "echem-c4b0e.firebaseapp.com",
  projectId: "echem-c4b0e",
  storageBucket: "echem-c4b0e.appspot.com",
  messagingSenderId: "1075983918458",
  appId: "1:1075983918458:web:46d0686d68eaa87f3062c3",
  measurementId: "G-1M8LS8R40Y"
};

firebase.initializeApp(firebaseConfig);
var db = firebase.firestore();

window.db = db;

db.settings({
  timestampsInSnapshots: true
});

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
