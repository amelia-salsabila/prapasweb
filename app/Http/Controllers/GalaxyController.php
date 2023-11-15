<?php

namespace App\Http\Controllers;

use App\Models\Galaxy;

class PlanetController extends Controller
{
    public function viewAllGalaxies()
    {
        return view('galaxy', [
            "tittle" => 'galaxy',
            "extra" => Galaxy::all()
        ]);
    }
}
