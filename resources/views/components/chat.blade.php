@auth
<div id='chat-head'>
    <a href="/chat"><i data-feather='message-square'></i> <span>{{count(auth()->user()->unreadNotifications)}}</span></a>
</div>
@endauth
