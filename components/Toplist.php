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
            'name'        => 'Toplist',
            'description' => 'Show a Toplist.'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
            'toplistType' => [
                'title'       => 'Toplist Type',
                'type'        => 'dropdown',
                'default'     => 'games',
                'placeholder' => 'Select Toplist type',
                'options'     => ['games'=>'Games', 'streams'=>'Streams']
            ],
            'limit' => [
                'title'       => 'Limit',
                'description' => 'Limit of Items to show. Default: 10',
                'type'        => 'string',
                'default'     => '10'
            ]
        ];
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