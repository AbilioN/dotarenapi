<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\MatchInterface;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    //
    private $match;

    function __construct(MatchInterface $match)
    {
        $this->match = $match;
    }


    public function find($matchId)
    {
        $match = $this->match->find($matchId);

        dd($match);
    }
}
