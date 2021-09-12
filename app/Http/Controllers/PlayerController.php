<?php

namespace App\Http\Controllers;

use App\Http\Services\PlayerService;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    // function __construct()
    // {
        
    // }

    public function show(Request $request, $playerId)
    {
        $player = Player::find($playerId);
        dd($player->servicer);
        $playerStats = $player->servicer->getPlayerStats();
        dd($playerStats);
        return response()->json([
            'success' => true,
            'body' => $playerStats
        ]);
    }
}
