<?php namespace DigitalRonin\Twitch\Components;

use Cms\Classes\ComponentBase;
use DigitalRonin\Twitch\Classes\TwitchAPI;

class Feed extends ComponentBase
{
    /**
     * @var Collection
     */
    public $posts;

    /**
     * @var string
     */
    public $channel;

    /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noPostsMessage;

    /**
     * @inheritdoc
     */
    public function ComponentDetails()
    {
        return [
            'name'        => 'digitalronin.twitch::lang.feed.name',
            'description' => 'digitalronin.twitch::lang.feed.description'
        ];
    }

    /**
     * @inheritdoc
     */
    public function defineProperties()
    {
        return [
          'channel' => [
              'title'       => 'digitalronin.twitch::lang.settings.channel_name',
              'description' => 'digitalronin.twitch::lang.settings.channel_description',
              'type'        => 'string',
              'required'    => true
          ],
            'limit' => [
                'title'       => 'digitalronin.twitch::lang.settings.limit_title',
                'description' => 'digitalronin.twitch::lang.settings.limit_description',
                'type'        => 'string',
                'default'     => '10'
            ],
            'noPostsMessage' => [
                'title'        => 'digitalronin.twitch::lang.settings.posts_no_posts',
                'description'  => 'digitalronin.twitch::lang.settings.posts_no_posts_description',
                'type'         => 'string',
                'default'      => 'No posts found',
                'showExternalParam' => false
            ],
            'client_id' => [
                'title'       => 'digitalronin.twitch::lang.settings.channel_client_id',
                'description' => 'digitalronin.twitch::lang.settings.channel_client_description',
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

        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');
        $this->channel = $this->page['channel'] = $this->property('channel');
        $this->posts = $this->page['posts'] = $this->listPosts();
    }

    protected function listPosts()
    {
      $requestUrl = "/feed/".$this->property('channel')."/posts"."?client_id=".$this->property('client_id')."&limit=".($this->property('limit')?$this->property('limit') : "0");
      $twitch = new TwitchAPI();

      return json_decode($twitch->apiRequest($requestUrl), true)["posts"];
    }
}
