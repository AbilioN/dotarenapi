<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\PlayerInterface;
use App\Http\Interfaces\ResponseInterface;
use App\Http\Services\PlayerService;
use App\Models\Player;
use App\Repositories\PlayerRepository;
use Exception;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    private $player;
    private $response;


    function __construct(PlayerInterface $player, ResponseInterface $response)
    {
        $this->player = $player;
        $this->response = $response;
    }

    public function show(Request $request, $playerId)
    {
        try{
            $player = $this->player->find($playerId);
            $playerStats = $this->player->getPlayerStats($player->steam_id);
            $player->playerStats = $playerStats;
            return $this->response->sucess($player);
        }catch(Exception $e)
        {
            return $this->response->serverError($e->getMessage());
        }
       
    }
}
