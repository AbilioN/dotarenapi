<?php

namespace App\Models;

use App\Http\Services\PlayerService;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

 
    function __construct()
    {
        $this->servicer = new PlayerService($this->steam_id);
    }

    public function path()
    {
        return 'players/'.$this->steam_id;
    }
}
