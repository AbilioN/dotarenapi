<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // use RefreshDatabase , DatabaseMigrations; 


    public function setUp(): void
    {

        $this->user = User::where('is_admin' , false)->orderByRaw('RAND()')->first();   

    }

     /** @test */
     public function user_have_player_if_not_admin()
     {
        $this->assertFalse((bool)$this->user->is_admin);
     }
}
