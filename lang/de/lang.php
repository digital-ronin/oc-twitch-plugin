<?php

return [
    'plugin' => [
        'name' => 'Twitch',
        'description' => 'Bietet Integration von diversen Twitch.tv Diensten.',
    ],
    'settings' => [
        'channel_name' => 'Kanal Name',
        'channel_description' => 'Name des Twitch Kanals.',
        'twitch_id_title' => 'Twitch ID',
        'twitch_id_description' => 'Twitch ID für live streams oder video id für letzte Übertragungen.',
        'width_name' => 'Stream Breite',
        'width_description' => 'Breite des eingebettenen Streams oder Videos.',
        'height_name' => 'Höhe',
        'height_description' =>'Höhe des eingebettenen Streams oder Videos.',
        'volume_name' => 'Lautstärke',
        'volume_description' => 'Standard Lautstärke zum Beispiel 0.5 für 50%',
        'limit_title' => 'Limit',
        'limit_description' => 'Maximal Anzahl der anzuzeigenden Einträge. Standard: 10',
        'posts_no_posts' => 'Zeige Twitch Feed Beiträge',
        'posts_no_posts_description' => 'Zeige Twitch Feed Beiträge.',
        'chat_name' => 'Chat',
        'chat_description' => 'Stream Chat anzeigen',
        'chat_width_name' => 'Chat Breite',
        'chat_width_description' => 'Breite des Chats zum Beispiel: 300 oder 25%'
    ],
    'check' => [
        'name' => 'Twitch Online Check',
        'description' => 'Zeigt ob ein Kanal online ist.'
    ],
    'feed' => [
        'name' => 'Twitch Feed',
        'description' => 'Zeigt Twitch Feed Beiträge.',
        'disabled' => 'Der Feed dieses Channels ist deaktiviert.'
    ],
    'toplist' => [
        'name' => 'Twitch Topliste',
        'description' => 'Zeigt eine Twitch Topliste an.',
        'type_title' => 'Typ der Topliste',
        'type_placeholder' => 'Typ der Topliste ausw&auml;hlen',
        'limit_title' => 'Limit',
        'limit_description' => 'Maximale Anzahl der Eintr&auml;ge in der Topliste festlegen. Standard: 10',
    ],
    'stream' => [
        'name' => 'Twitch Stream',
        'description' => 'Twitch Live Streams & Videos einbinden',
        'type_title' => 'Type',
        'type_description' => 'Stream für live streams oder Video für letzte Übertragungen einbinden',
    ]
];
