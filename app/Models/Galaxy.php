<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galaxy
{
    private static $galaxies = [
        [
            'name' => 'Milky Way',
            'number_stars' => 1000000000000
        ],
        [
            'name' => 'Andromeda',
            'number_stars' => 1000000000000
        ],
        [
            'name' => 'Triangulum',
            'number_stars' => 40000000000
        ],
        [
            'name' => 'Messier 87',
            'number_stars' => 2000000000000
        ],
        [
            'name' => 'Sombrero',
            'number_stars' => 800000000
        ],

    ];
    public static function all()
    {
        return self::$galaxies;
    }
}
