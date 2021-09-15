<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\PlayerInterface;
use App\Http\Services\PlayerService;
use App\Models\Player;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    private $player;
    function __construct(PlayerInterface $player)
    {
        $this->player = $player;
    }

    public function show(Request $request, $playerId)
    {
        $player = $this->player->find($playerId);
        $playerStats = $this->player->getPlayerStats($player->steam_id);
        $player->playerStats = $playerStats;
        return response()->json([
            'success' => true,
            'body' => $player
        ]);
    }
}
