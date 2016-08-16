<?php

return [
    'plugin' => [
        'name' => 'Twitch',
        'description' => 'Provides Twitch.tv integration services.',
    ],
    'check' => [
        'name' => 'Twitch Online Check',
        'description' => 'Shows if a Channel is online.',
        'channel_name' => 'Channel Name',
        'channel_description' => 'Name of the twitch channel.'
    ],
    'component' => [
        'toplist_name' => 'Twitch Toplist',
        'toplist_description' => 'Outputs a Twitch Toplist.',
        'toplist_toplistType_title' => 'Toplist Type',
        'toplist_toplistType_placeholder' => 'Select Toplist type',
        'toplist_limit_title' => 'Limit',
        'toplist_limit_description' => 'Limit of Items to show. Default: 10',
    ],
];