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

Route::get('/', function () {

    $links = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];

    return view('home');
});

Route::get('/', function () {

    // 'comics' dentro config è il nome del file all'interno della cartella config
    $comics = config('comics');

    // dd() è come il var_dump ma ottimizzato per laravel
    // dd($comics);

    return view('home', compact('comics'));
});
