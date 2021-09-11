<?php 

namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class HeroService
{
    protected $url =  'https://api.opendota.com/api/heroStats';


    function __construct()
    {
        $this->api = new ExternalApiCall();
    }

    public function getAllHeroes()
    {
        $allHeroes = $this->api->call($this->url);
        $allHeroes = json_decode($allHeroes);
        $allHeroes = collect($allHeroes);
        $allHeroes = $allHeroes->map(function ($hero){
            $hero->img = $this->url . $hero->img;
            $hero->icon = $this->url . $hero->icon;
            return $hero;
        });
        return $allHeroes;
    }
}