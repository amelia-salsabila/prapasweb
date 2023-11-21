<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\GalaxyController;
use App\Http\Controllers\StarsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/planets/all', [PlanetController::class, 'index'])->name('planets.all');
Route::get('/planets/detail/{id}', [PlanetController::class, 'showDetail']);

Route::get('/galaxies/all', [GalaxyController::class, 'index'])->name('galaxies.all');
Route::get('/galaxies/detail/{id}', [GalaxyController::class, 'showDetail']);

Route::get('/stars/all', [StarsController::class, 'index'])->name('stars.all');
Route::get('/stars/detail/{id}', [StarsController::class, 'showDetail']);
