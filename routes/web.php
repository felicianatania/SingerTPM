<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    echo ('Welcome');
});

// Route::get('/create', function() {
//     return view('create');
// });

Route::get('/create', [SongController::class,'getCreatePage'])->name('getCreatePage');

Route::post('/create-song', [SongController::class, 'createSong'])->name('createSong');

Route::get('/get-songs', [SongController::class, 'getSongs'])->name('getSongs');
