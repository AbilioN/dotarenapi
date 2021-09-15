<?php
namespace App\Repositories;

use App\Http\Interfaces\PlayerInterface;
use App\Http\Services\PlayerService;
use App\Models\Player;

class PlayerRepository implements PlayerInterface
{
    private $model;
    private $service;

    public function __construct(Player $model, PlayerService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function find($playerId)
    {
        return $this->model->find($playerId);
    }

    public function getPlayerStats($steamId)
    {
        return $this->service->getPlayerStats($steamId);
    }

}