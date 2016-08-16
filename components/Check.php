<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Check extends ComponentBase
{
    /**
     * @var
     */
    private $channelStatus;

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
                'title'       => 'digitalronin.twitch::lang.check.channel_name',
                'description' => 'digitalronin.twitch::lang.check.channel_description',
                'type'        => 'string',
                'required'    => true
            ]
        ];
    }

    /**
     * @return bool
     */
    public function channelStatus(){

        if ($this->channelStatus !== NULL) {
            return $this->channelStatus;
        }

        $twitch = new TwitchAPI();
        $this->channelStatus = $twitch->isChannelLive($this->property('channel'));

        return $this->channelStatus;
    }
}