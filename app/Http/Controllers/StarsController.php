<?php

namespace App\Http\Controllers;

use App\Models\stars;

use Illuminate\Http\Request;

class StarsController extends Controller
{
    public function index()
    {
        return view('stars.all', [
            "title" => "Stars",
            "stars" => Stars::all()
        ]);
    }

    public function showDetail($id)
    {
        $star = Stars::find($id);


        if (!$star) {
            abort(404);
        }

        return view('stars.detail', ['star' => $star]);
    }
}
