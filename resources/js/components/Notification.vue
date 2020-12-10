<template>
<div id='chat-head'>
    <a href="/chat"><i data-feather='message-square'></i> <span>{{unreadNotifications.lengh}}</span></a>
</div>
</template>

<script>
    export default {
    props:['unreads','userid'],
    data(){
      return {
        unreadNotifications: this.unreads
      }
    },
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.User.' + this.userid)
    .notification((notification) => {
        console.log(notification);
        let newUnreadNotifications={data:{message:notification.message,user:notification.user}};
        this.unreadNotifications.push(newUnreadNotifications);
    });
        }
    }
</script>
