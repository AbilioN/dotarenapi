<?php
namespace App\Repositories;

use App\Http\Interfaces\MatchInterface;
use App\Http\Services\MatchService;

class MatchRepository implements MatchInterface
{
    private $service;

    public function __construct(MatchService $service)
    {
        $this->service = $service;    
    }

    public function find($matchId)
    {
        return $this->service->find($matchId);
    }
}