<?php
namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class PlayerService extends BaseService
{
    private  $url;

    function __construct($steamId = null)
    {
        $this->steamId = $steamId;
        $this->url = 'https://api.opendota.com/api/'.'players'.'/'.$this->steamId;
        $this->recentMatchesUrl = '/recentMatches';
        $this->api = new ExternalApiCall();
    
    }

    public function getPlayerStats($steamId)
    {
        $this->setSteamId($steamId);

        $playerStats = $this->api->call($this->url);
        $lastMatches = $this->api->call($this->recentMatchesUrl);
        $playerStats->lastMatches = $lastMatches;
        return $playerStats;

    }

    public function setSteamId($steamId)
    {
        $this->steamId = $steamId;
        $this->url = $this->url.$this->steamId;
        $this->recentMatchesUrl = $this->url . $this->recentMatchesUrl;

    }
}