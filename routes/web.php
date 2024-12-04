<?php

use Illuminate\Support\Facades\Route;

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
    $memes = [];
    return view('welcome', compact('memes'));
});

Route::get('/generate-meme',[App\Http\Controllers\MemeController::class, 'getMemes']);
