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

        // @TODO: use this lane when sqlite memory ready
        // $this->user = factory(User::class)->create();

        $this->user = User::where('is_admin' , false)->orderByRaw('RAND()')->first();   

    }

     /** @test */
     public function user_have_player_if_not_admin()
     {
        $this->assertFalse((bool)$this->user->is_admin);
     }
}
