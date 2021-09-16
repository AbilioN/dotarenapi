<?php 

namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class MatchService extends BaseService
{

    private $matchId;

    public function __construct($matchId = null)
    {
        $this->matchId = $matchId;
        $this->url = 'https://api.opendota.com/api/'.'matches'.'/'.$this->matchId;
        $this->api = new ExternalApiCall();
        
    }
    

    public function find($matchId)
    {
        $this->setMatchId($matchId);
        return $this->api->call($this->url);
    }

    public function setMatchId($matchId)
    {
        $this->matchId = $matchId;
        $this->url = $this->url.$matchId;
    }
}