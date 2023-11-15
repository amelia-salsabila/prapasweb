<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function viewAllPlanets()
    {
        return view(
            'planet\index',
            [
                'title' => 'Planet List',
                'planets' => Planet::all()
            ]
        );
    }
}
