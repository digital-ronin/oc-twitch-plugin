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
              'title'       => 'digitalronin.twitch::lang.twitch.channel_name',
              'description' => 'digitalronin.twitch::lang.twitch.channel_description',
              'type'        => 'string',
              'required'    => true
          ],
            'limit' => [
                'title'       => 'digitalronin.twitch::lang.plugin.limit_title',
                'description' => 'digitalronin.twitch::lang.plugin.limit_description',
                'type'        => 'string',
                'default'     => '10'
            ],
            'noPostsMessage' => [
                'title'        => 'digitalronin.twitch::lang.feed.posts_no_posts',
                'description'  => 'digitalronin.twitch::lang.feed.posts_no_posts_description',
                'type'         => 'string',
                'default'      => 'No posts found',
                'showExternalParam' => false
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
      $requestUrl = "/feed/".$this->property('channel')."/posts";
      $twitch = new TwitchAPI();

      return json_decode($twitch->apiRequest($requestUrl), true)["posts"];
    }
}
