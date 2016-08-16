<?php namespace DigitalRonin\Twitch\Classes;

class TwitchAPI
{
    /**
     * @var string Twitch API Base URL
     */
    var $baseUrl = "https://api.twitch.tv/kraken";

    /**
     * @var string
     */
    private $typeUrl;

    /**
     * @var string
     */
    private $typePrefix;



    /**
     * @param string $url
     * @return string
     */
    public function apiRequest($url)
    {
        return file_get_contents($this->baseUrl.$url);
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    public function getTopGames($limit = 10, $offset = 0)
    {
        $json = $this->apiRequest("/games/top?limit=".$limit."&offset=".$offset);
        $json = json_decode($json, true);

        return $json["top"];
    }

    /**
     * @param string $type
     * @param int $limit
     * @param int $offset
     * @return string
     */
    public function getTopList($type, $limit = 10, $offset = 0)
    {
        $this->setListTypeSettings($type);

        $json = $this->apiRequest($this->typeUrl."?limit=".$limit."&offset=".$offset);
        $object = json_decode($json, true);

        return $object[$this->typePrefix];
    }

    /**
     * @param $type
     * @return string
     */
    private function setListTypeSettings($type)
    {
        switch ($type) {
            case 'games':
                $this->typeUrl = '/games/top';
                $this->typePrefix = "top";
                break;
            case 'streams':
                $this->typeUrl = '/streams';
                $this->typePrefix = "streams";
                break;
            default:
                $this->typeUrl= '';
                $this->typePrefix = NULL;
        }
    }


}