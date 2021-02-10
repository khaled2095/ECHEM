<template>
  <div class="container-chat clearfix">
    <div class="row">
      <div class="people-list" id="people-list">
        <ul class="list">
          <li
            @click="MakeActive(user.id)"
            @click.prevent="selectUser(user.id)"
            class="clearfix"
            v-for="user in userList"
            :key="user.id"
          >
            <div class="about">
              <div class="name">{{user.name}}</div>
              <div class="status">
                <i class="fa fa-circle online"></i> online
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="chat">
        <div class="chat-header clearfix">
          <img
            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg"
            alt="avatar"
          />

          <div class="chat-about">
            <div v-if="userMessage.user" class="chat-with">{{userMessage.user.name}}</div>
          </div>
          <i class="fa fa-star"></i>
        </div>
        <!-- end chat-header -->

        <div class="chat-history" v-chat-scroll>
          <ul v-if = "active_field">
            <li class="clearfix" v-for="message in messages" :key="message.id">
              <div v-if="message.receiver == user && message.sender == sender || message.receiver == sender && message.sender == user">
                <div class="message-data align-right">
                  <!--<span class="message-data-time">{{message.createdAt}}</span> &nbsp; &nbsp;-->
                  <i class="fa fa-circle me"></i>
                </div>
                <div :class="`message  float-right ${message.receiver == user ? 'other-message' : 'my-message'}`">{{message.message}}</div>
                </div>
            </li>
          </ul>
        </div>
        <!-- end chat-history -->

        <div class="chat-message clearfix">
          <textarea
            @keydown.enter="sendMessage"
            v-model="message"
            name="message-to-send"
            id="message-to-send"
            placeholder="Type your message"
            rows="3"
          ></textarea>

          <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
          <i class="fa fa-file-image-o"></i>

          <button>Send</button>
        </div>
        <!-- end chat-message -->
      </div>
      <!-- end chat -->
    </div>
    <!-- end container -->

  </div>
</template>

<script>
export default {
  mounted() {
    Echo.private(`chat.${authuser.id}`).listen("MessageSend", e => {
      this.selectUser(e.message.from_user);
    });
    this.$store.dispatch("userList");
  },

  data() {
    return {
      message: "",
      messages:[],
      active_field:null,
      user: `${authuser.id}`,
      sender:null
    };
  },

  computed: {
    userList() {
      return this.$store.getters.userList;
    },
    userMessage() {
      return this.$store.getters.userMessage;
    }
  },

  created() {
    // this.fetchMessages();
  },

  methods: {
    selectUser(userId) {
      this.$store.dispatch("userMessage", userId);
    },
    MakeActive: function(field){
      this.active_field = field
      this.fetchMessages1(field);
      this.fetchMessages2(field);
      this.sender = field;
    },
    sendMessage(e) {
      db.collection("message").add({
          receiver: this.userMessage.user.id,
          message: this.message,
          sender: parseInt(`${authuser.id}`),
          createdAt: new Date()
        })
        this.message = "";
      // e.preventDefault();
      // if (this.message != "") {
      //   axios
      //     .post("/senemessage", {
      //       message: this.message,
      //       user_id: this.userMessage.user.id
      //     })
      //     .then(response => {
      //       this.selectUser(this.userMessage.user.id);
      //     });
      //   this.message = "";
      // }
    },
    fetchMessages1(field){
      db.collection('message').orderBy('createdAt').where('sender', 'in', [field, parseInt(`${authuser.id}`)] ).onSnapshot((querySnapshot)=>{
        let allMessages=[];
        querySnapshot.forEach(doc=>{
          allMessages.push(doc.data())
        })
        this.messages=allMessages;
      })
    },
    fetchMessages2(field){
      db.collection('message').orderBy('createdAt').where('receiver', 'in', [field, parseInt(`${authuser.id}`)] ).onSnapshot((querySnapshot)=>{
        let allMessages=[];
        querySnapshot.forEach(doc=>{
          allMessages.push(doc.data())
        })
        this.messages=allMessages;
      })
    }
  }
};
</script>

<style>
.people-list ul {
  overflow-y: scroll !important;
}
</style>
