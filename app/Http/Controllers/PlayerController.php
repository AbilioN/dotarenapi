<?php

namespace App\Http\Controllers;

use App\Http\Services\PlayerService;
use App\Models\Player;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    function __construct(PlayerRepository $repo)
    {
        $this->repo = $repo;
    }

    public function show(Request $request, $playerId)
    {
        $player = $this->repo->find($playerId);
        $playerStats = $this->repo->getPlayerStats($player->steam_id);
        $player->playerStats = $playerStats;
        return response()->json([
            'success' => true,
            'body' => $player
        ]);
    }
}
