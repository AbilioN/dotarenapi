<?php

namespace Tests\Feature;

use App\Models\Player;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerRouteTest extends TestCase
{

    public function setUp(): void
    {
        
        $this->user = User::where('is_admin' , false)->orderByRaw('RAND()')->first();  
        $this->player = Player::where('user_id' , $this->user->id)->first(); 
        dd($this->player);

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */


    /** @test */
    public function a_player_have_stats()
    {
        $this->withExceptionHandling();
        // $response = $this->get(route('api.players.show',  $this->player->id));
        // $response = $this->get('players/'.$this->player->id);
        $response = $this->get(route('api.heroes.show'));

        $response->assertStatus(200);
    }
}
