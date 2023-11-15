<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\GalaxyController;
use App\Models\Galaxy;
use App\Models\Planet;

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

Route::get('/planets', [PlanetController::class, 'viewAllPlanets']);
Route::get('/planets/detail', [PlanetController::class, 'viewPlanet']);

Route::get('/galaxies', [GalaxyController::class, 'viewAllGalaxies']);
Route::get('/galaxies/detail', [GalaxyController::class, 'viewGalaxy']);
