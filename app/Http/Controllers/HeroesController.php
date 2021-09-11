<?php

namespace App\Http\Controllers;

use App\Http\Services\HeroService;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    function __construct()
    {
        $this->servicer = new HeroService();
    }

    public function show()
    {
        $heroes = $this->servicer->getAllHeroes();
        return response()->json([
            'success' => true,
            'body' => $heroes
        ]);
    }
}
