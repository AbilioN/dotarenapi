<?php 

namespace App\Http\Services;

use App\Helpers\ExternalApiCall;

class HeroService extends BaseService
{
    protected $url;
    
    function __construct()
    {
        $this->url = parent::$baseUrl.'heroStats';
        $this->api = new ExternalApiCall();

    }


    public function getAllHeroes()
    {
        $allHeroes = $this->api->call($this->url);
        $baseUrl = 'https://api.opendota.com';

        $allHeroes = $allHeroes->map(function ($hero) use ($baseUrl){
                $hero['img'] = $baseUrl . $hero['img'];
                $hero['icon'] = $baseUrl . $hero['icon'];
            return $hero;
        });
        return $allHeroes;
    }
}