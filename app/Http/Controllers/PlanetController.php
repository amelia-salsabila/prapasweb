<?php

namespace App\Http\Controllers;

use App\Models\planets;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        return view('planets.all', [
            "title" => "Planets",
            "planets" => Planets::all()
        ]);
    }

    public function showDetail($id)
    {
        $planet = Planets::find($id);


        if (!$planet) {
            abort(404);
        }

        return view('planets.detail', ['planet' => $planet]);
    }
}
