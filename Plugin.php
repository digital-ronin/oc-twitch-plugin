<?php namespace DigitalRonin\Twitch;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Twitch',
            'description' => 'Provides Twitch.tv integration services.',
            'author'      => 'Daniel-Bruni Ziermann',
            'icon'        => 'icon-video-camera',
            'homepage'    => 'https://github.com/digital-ronin/twitch-plugin/'
        ];
    }

    public function registerComponents()
    {
        return [
            'DigitalRonin\Twitch\Components\Toplist' => 'toplist'
        ];
    }

}