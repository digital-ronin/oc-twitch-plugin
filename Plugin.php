<?php namespace DigitalRonin\Twitch;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.plugin.name',
            'description' => 'digitalronin.twitch::lang.plugin.description',
            'author'      => 'Daniel-Bruni Ziermann',
            'icon'        => 'icon-video-camera',
            'homepage'    => 'https://github.com/digital-ronin/twitch-plugin/'
        ];
    }

    public function registerComponents()
    {
        return [
            'DigitalRonin\Twitch\Components\Check' => 'check',
            'DigitalRonin\Twitch\Components\Feed' => 'feed',
            'DigitalRonin\Twitch\Components\Toplist' => 'toplist'
        ];
    }
}
