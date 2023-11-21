<?php

namespace App\Http\Controllers;

use App\Models\galaxies;

class GalaxyController extends Controller
{
    public function index()
    {
        return view('galaxies.all', [
            "title" => "Galaxies",
            "galaxies" => Galaxies::all()
        ]);
    }

    public function showDetail($id)
    {
        $galaxy = Galaxies::find($id);


        if (!$galaxy) {
            abort(404);
        }

        return view('galaxies.detail', ['galaxy' => $galaxy]);
    }
}
