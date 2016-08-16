<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Check extends ComponentBase
{
    /**
     * @var bool
     */
    public $channelIsOnline;

    /**
     * @inheritdoc
     */
    public function ComponentDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.check.name',
            'description' => 'digitalronin.twitch::lang.check.description'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'channel' => [
                'title'       => 'digitalronin.twitch::lang.twitch.channel_name',
                'description' => 'digitalronin.twitch::lang.twitch.channel_description',
                'type'        => 'string',
                'required'    => true
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function onRun()
    {
        $this->addCss('/plugins/digitalronin/twitch/assets/css/twitch.css');

        $this->channelIsOnline = $this->page['channelIsOnline'] = $this->getChannelStatus();
    }

    /**
     * @return bool
     */
    public function getChannelStatus()
    {
        $twitch = new TwitchAPI();
        return $twitch->isChannelLive($this->property('channel'));
    }
}
