<?php

namespace Tests\Feature;

use App\Models\Player;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerRoutineTest extends TestCase
{

    public function setUp(): void
    {
        
        $this->user = User::where('is_admin' , false)->orderByRaw('RAND()')->first();  
        $this->player = Player::where('user_id' , $this->user->id)->first(); 

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */


    /** @test */
    public function a_player_have_stats()
    {
        // $response = $this->get(route('api.players.show',  $this->player->id));
        $response = $this->get('players/'.$this->player->id);

        $response->assertStatus(200);
    }
}
