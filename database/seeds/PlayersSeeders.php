<?php

use App\Models\Player;
use App\User;
use Illuminate\Database\Seeder;

class PlayersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allUsers = User::where('is_admin', false)->get();

        foreach($allUsers as $user)
        {
            factory(Player::class)->create(['user_id' => $user->id]);
        }
    }
}
