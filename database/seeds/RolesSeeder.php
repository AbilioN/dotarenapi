<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('roles')->insert([

            ['name' => 'Hard Carry'],
            ['name' => 'Midlane'],
            ['name' => 'Offlane'],
            ['name' => 'Soft Support'],
            ['name' => 'Hard Support'],

        ]);
    }
}
