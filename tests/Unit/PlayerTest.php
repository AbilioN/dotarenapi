<?php

namespace Tests\Unit;

use App\Models\Player;
use App\User;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function setUp(): void
    {
        
        $this->user = User::where('is_admin' , false)->orderByRaw('RAND()')->first();  
        $this->player = Player::where('user_id' , $this->user->id)->first(); 

    }
     /** @test */
    public function a_player_has_steam_id()
    {
        $this->assertNotNull($this->player->steam_id);
    }

     /** @test */
    public function a_player_has_primary_role_id()
    {
        $this->assertNotNull($this->player->primary_role_id);
    }
    
     /** @test */
    public function a_player_has_secondary_role_id()
    {
        $this->assertNotNull($this->player->secondary_role_id);
    }
}
