<?php

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

Route::get('/fumetti', function () {
    $comics = config("comics");
    // dump($comics);
    return view('fumetti', [
        "comics" => $comics
    ]);
});

Route::get('/', function () { 
    return view('home');
});

