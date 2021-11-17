<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\MatchInterface;
use App\Http\Interfaces\ResponseInterface;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    private $match;
    private $response;

    function __construct(MatchInterface $match, ResponseInterface $response)
    {
        $this->match = $match;
        $this->response = $response;
    }


    public function find($matchId)
    {
        $match = $this->match->find($matchId);
        return $this->response->sucess($match);
    }
}
