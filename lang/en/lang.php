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
    'component' => [
        'toplist_name' => 'Twitch Toplist',
        'toplist_description' => 'Outputs a Twitch Toplist.',
        'toplist_toplistType_title' => 'Toplist Type',
        'toplist_toplistType_placeholder' => 'Select Toplist type',
    ],
];
