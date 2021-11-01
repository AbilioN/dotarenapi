<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeroesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function heroes_can_be_showed()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('api.heroes.show'));
        $response->assertStatus(200);
    }
}
