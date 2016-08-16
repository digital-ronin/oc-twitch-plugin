<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Toplist extends ComponentBase
{
    /**
     * @var array
     */
    protected $twitchItems;

    /**
     * @var int
     */
    protected $totalItems;

    /**
     * @inheritdoc
     */
    public function ComponentDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.component.toplist_name',
            'description' => 'digitalronin.twitch::lang.component.toplist_description'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'toplistType' => [
                'title'       => 'digitalronin.twitch::lang.component.toplist_toplistType_title',
                'type'        => 'dropdown',
                'default'     => 'games',
                'placeholder' => 'digitalronin.twitch::lang.component.toplist_toplistType_placeholder',
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
    }

    /**
     * @return array
     */
    public function twitchItems()
    {
        if ($this->twitchItems !== null) {
            return $this->twitchItems;
        }

        $twitch = new TwitchAPI();
        $this->twitchItems = $twitch->getTopList( $this->property('toplistType'), $this->totalItems() );

        return $this->twitchItems;
    }

    /**
     * Total amount of Games set by the User
     *
     * @return int
     */
    public function totalItems()
    {
        if ($this->totalItems == null) {
            $this->totalItems = intval($this->property('limit'));
        }

        return $this->totalItems;
    }

    /**
     * @return string
     */
    public function toplistType()
    {
        return $this->property('toplistType');
    }

}
