<?php

return [
    'plugin' => [
        'name' => 'Twitch',
        'description' => 'Provides Twitch.tv integration services.',
        'limit_title' => 'Limit',
        'limit_description' => 'Limit of Items to show. Default: 10',
    ],
    'twitch' => [
      'channel_name' => 'Channel Name',
      'channel_description' => 'Name of the twitch channel.'
    ],
    'check' => [
        'name' => 'Twitch Online Check',
        'description' => 'Shows if a Channel is online.'
    ],
    'feed' => [
        'name' => 'Twitch Feed',
        'description' => 'Show Twitch Feed Posts.',
        'disabled' => 'This Channel Feed is disabled.',
        'posts_no_posts' => 'Show Twitch Feed Posts.',
        'posts_no_posts_description' => 'Show Twitch Feed Posts.'
    ],
    'toplist' => [
        'name' => 'Twitch Toplist',
        'description' => 'Outputs a Twitch Toplist.',
        'type_title' => 'Toplist Type',
        'type_placeholder' => 'Select Toplist type',
    ],
];
