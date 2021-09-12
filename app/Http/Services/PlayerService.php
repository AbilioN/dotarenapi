<?php
namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class PlayerService extends BaseService
{
    private  $url;

    function __construct($steamId)
    {
     
        $this->url = 'https://api.opendota.com/api/'.'players'.'/'.$steamId;
        $this->recentMatchesUrl = $this->url.'/recentMatches';
        $this->steamId = $steamId;
    
    }

    public function getPlayerStats()
    {
        $playerStats = $this->api->call($this->url);
        $lastMatches = $this->api->call($this->recentMatchesUrl);

        $playerStats->lastMatches = $lastMatches;
        return $playerStats;

    }
}