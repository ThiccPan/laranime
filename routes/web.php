<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Models\Anime;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/anime', [AnimeController::class,'index']);

Route::get('/anime/create', [AnimeController::class,'create']);

Route::post('/anime/insert', [AnimeController::class,'insert']);

Route::get('/anime/{id}/edit', [AnimeController::class,'edit']);

Route::put('/anime/{id}', [AnimeController::class,'update']);

Route::delete('/anime/{id}',[AnimeController::class, 'destroy']);
