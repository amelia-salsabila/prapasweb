<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet
{
    private static $planets = [
        [
            'name' => 'Mercury',
            'distance_from_sun' => 36,
            'at' => '2022-01-01'
        ],
        [
            'name' => 'Venus',
            'distance_from_sun' => 67,
            'at' => '2022-02-15'
        ],
        [
            'name' => 'Earth',
            'distance_from_sun' => 93,
            'at' => '2022-03-23'
        ],
        [
            'name' => 'Mars',
            'distance_from_sun' => 142,
            'at' => '2022-04-10'
        ],
        [
            'name' => 'Jupiter',
            'distance_from_sun' => 484,
            'at' => '2022-05-29'
        ],
    ];

    public static function all()
    {
        return self::$planets;
    }
}
