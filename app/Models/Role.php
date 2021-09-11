<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static $roles = [

        'Hard Carry',
        'Midlane',
        'Offlane',
        'Soft Support',
        'Hard Support'
    ];
}
