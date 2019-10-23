<?php namespace DigitalRonin\Twitch\Classes;

class TwitchAPI
{
    /**
     * @var string Twitch API Base URL
     */
    private $baseUrl = 'https://api.twitch.tv/kraken';

    /**
     * @var string Rest URL based on Toplist Type
     */
    private $typeUrl;

    /**
     * @var string Array Prefix based on Toplist Type
     */
    private $typePrefix;

    /**
     * Do API Request with given url
     *
     * @param string $url
     * @return string
     */
    public function apiRequest($url)
    {
        return file_get_contents($this->baseUrl.$url);
    }

    /**
     * Get Toplist with given Type, Limit and Offset
     *
     * @param string $type
     * @param int $limit
     * @param int $offset
     * @return string
     */
    public function getTopList($type, $limit = 10, $offset = 0, $client_id)
    {
        $this->setListTypeSettings($type);

        $json = $this->apiRequest( $this->typeUrl."?limit=".$limit."&offset=".$offset."&client_id=".$client_id );
        $object = json_decode( $json, true );

        return $object[$this->typePrefix];
    }

    /**
     * Returns True of False whether the Channel is online or not
     *
     * @param string $channel Name of the Twitch Channel
     * @return bool
     */
    public function isChannelLive($channel)
    {
        $callAPI = $this->apiRequest("/streams/".$channel);
        $dataArray = json_decode( $callAPI, true );

        return ( !is_null($dataArray[ "stream" ]) ) ? true : false;
    }

    /**
     * @param $type
     * @return void
     */
    private function setListTypeSettings($type)
    {
        switch ($type) {
            case 'games':
                $this->typeUrl = "/games/top";
                $this->typePrefix = "top";
                break;
            case 'streams':
                $this->typeUrl = "/streams";
                $this->typePrefix = "streams";
                break;
            default:
                $this->typeUrl= '';
                $this->typePrefix = null;
        }
    }
}
