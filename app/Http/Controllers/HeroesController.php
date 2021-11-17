<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HeroesInterface;
use App\Http\Interfaces\ResponseInterface;
use App\Http\Services\HeroService;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    function __construct(HeroesInterface $heroes, ResponseInterface $response)
    {
        $this->heroes = $heroes;
        $this->response = $response;
    }

    public function show()
    {
        $heroes = $this->heroes->listAllHeroes();
        $this->response->sucess($heroes); 
    }
}
