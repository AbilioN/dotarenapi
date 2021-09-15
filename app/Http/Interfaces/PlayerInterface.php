<?php
namespace App\Http\Interfaces;

interface PlayerInterface
{

    function find($playerId);

    function getPlayerStats($steamId);
}