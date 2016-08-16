<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Toplist extends ComponentBase
{
    /**
     * @var array
     */
    public $twitchItems;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var string
     */
    public $toplistType;

    /**
     * @inheritdoc
     */
    public function ComponentDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.toplist.name',
            'description' => 'digitalronin.twitch::lang.toplist.description'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'toplistType' => [
                'title'       => 'digitalronin.twitch::lang.toplist.type_title',
                'type'        => 'dropdown',
                'default'     => 'games',
                'placeholder' => 'digitalronin.twitch::lang.toplist.type_placeholder',
                'options'     => ['games'=>'Games', 'streams'=>'Streams']
            ],
            'limit' => [
                'title'       => 'digitalronin.twitch::lang.plugin.limit_title',
                'description' => 'digitalronin.twitch::lang.plugin.limit_description',
                'type'        => 'string',
                'default'     => '10'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function onRun()
    {
        $this->addCss('/plugins/digitalronin/twitch/assets/css/twitch.css');
        $this->addJs('//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js');
        $this->addJs('//npmcdn.com/imagesloaded@4/imagesloaded.pkgd.js');
        $this->addJs('/plugins/digitalronin/twitch/assets/js/toplist.js');

        $this->toplistType = $this->page['toplistType'] = $this->getToplistType();
        $this->totalItems = $this->page['totalItems'] = $this->getTotalItems();
        $this->twitchItems = $this->page['twitchItems'] = $this->getTwitchItems();
    }

    /**
     * @return array
     */
    public function getTwitchItems()
    {
        $twitch = new TwitchAPI();
        return $twitch->getTopList( $this->toplistType, $this->totalItems );
    }

    /**
     * Total amount of Games set by the User
     *
     * @return int
     */
    public function getTotalItems()
    {
        return intval($this->property('limit'));
    }

    /**
     * @return string
     */
    public function getToplistType()
    {
        return $this->property('toplistType');
    }

}
