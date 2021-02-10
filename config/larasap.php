<?php

return [

    'telegram' => [
        'api_token' => '',
        'bot_username' => '',
        'channel_username' => '', // Channel username to send message
        'channel_signature' => '', // This will be assigned in the footer of message
        'proxy' => false,   // True => Proxy is On | False => Proxy Off
    ],

    'twitter' => [
        'consurmer_key' => '',
        'consurmer_secret' => '',
        'access_token' => '',
        'access_token_secret' => ''
    ],

    'facebook' => [
        'app_id' => '272488550862776',
        'app_secret' => '3654db98020e49e85815f13f994dd4ac',
        'default_graph_version' => 'v8.0',
        'page_access_token' => 'EAAD3069Hj7gBAH1kXfpkEcFVvznZARy7kQJDZACBjBpryzbQQaVZB0qyR4nGkrwFULNrddVDb6qR6ZCcblgv2tZCcZCkCiYOkdjRBBBi4s9FZBM3nsGfqPNBMInhbgLxPOyVE4Meqz7iQs1hmcH3vTZA9NEMpZAR2H4IgASPkMs42EwZDZD'
    ],

    // Set Proxy for Servers that can not Access Social Networks due to Sanctions or ...
    'proxy' => [
        'type' => '',   // 7 for Socks5
        'hostname' => '', // localhost
        'port' => '' , // 9050
        'username' => '', // Optional
        'password' => '', // Optional
    ]
];
