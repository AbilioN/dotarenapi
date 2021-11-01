<?php

namespace App\Repositories;


use App\Http\Interfaces\HeroesInterface;
use App\Http\Services\HeroService;

class HeroeRepository implements HeroesInterface
{

    private $service;
    public function __construct(HeroService $service)
    {
        $this->service = $service;
    }

    public function listAllHeroes()
    {
        return $this->service->getAllHeroes();
    }
}