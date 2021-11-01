<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\HeroesInterface;
use App\Http\Services\HeroService;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    function __construct(HeroesInterface $heroes)
    {
        $this->servicer = new HeroService();
        $this->heroes = $heroes;
    }

    public function show()
    {
        $heroes = $this->heroes->listAllHeroes();
        return response()->json([
            'success' => true,
            'body' => $heroes
        ]);
    }
}
