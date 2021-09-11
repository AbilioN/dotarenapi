<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Helpers\DotaHelper;
use App\Models\Player;
use App\Models\Role;
use App\User;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        
        'steam_id' => $faker->randomElement(DotaHelper::$steamids),
        'nickname' => $faker->name,
        'user_id' => factory(User::class),
        'primary_role_id' => $faker->randomElement(Role::all()),
        'secondary_role_id' => $faker->randomElement(Role::all()),

    ];
});
 