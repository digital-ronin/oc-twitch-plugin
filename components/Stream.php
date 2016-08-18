<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Stream extends  ComponentBase
{
    /**
     * @inheritdoc
     */
    public function ComponentDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.stream.name',
            'description' => 'digitalronin.twitch::lang.stream.description'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'type' => [
                'title'       => 'digitalronin.twitch::lang.stream.type_title',
                'description' => 'digitalronin.twitch::lang.stream.type_description',
                'type'        => 'dropdown',
                'default'     => 'stream',
                'options'     => ['stream'=>'Stream', 'video'=>'Video']
            ],
            'twitchId' => [
                'title'       => 'digitalronin.twitch::lang.settings.twitch_id_title',
                'description' => 'digitalronin.twitch::lang.settings.twitch_id_description',
                'placeholder' => 'channel name or video id',
                'required'    => true
            ],
            'width' => [
                'title'       => 'digitalronin.twitch::lang.settings.width_name',
                'description' => 'digitalronin.twitch::lang.settings.width_description',
                'type'        => 'string',
                'default'     => '854'
            ],
            'height' => [
                'title'       => 'digitalronin.twitch::lang.settings.height_name',
                'description' => 'digitalronin.twitch::lang.settings.height_description',
                'type'        => 'string',
                'default'     => '480'
            ],
            'volume' => [
                'title'       => 'digitalronin.twitch::lang.settings.volume_name',
                'description' => 'digitalronin.twitch::lang.settings.volume_description',
                'type'        => 'string',
                'default'     => '0.5'
            ],
            'chat' => [
                'title'       => 'Chat',
                'description' => 'Display Twitch Chat',
                'type'        => 'checkbox',
                'default'     => 0
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function onRun()
    {
        $this->addCss('/plugins/digitalronin/twitch/assets/css/twitch.css');
    }

}