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

    return view('home');
});

Route::get('/', function () {

    // 'comics' dentro config è il nome del file all'interno della cartella config
    $comics = config('comics');

    // dd() è come il var_dump ma ottimizzato per laravel
    // dd($comics);

    return view('home', compact('comics'));
});


Route::get('/description_comic', function () {

    $data = [
        "title" => "superman",
        "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. Its all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!",
        "thumb" => "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
        "price" => "$4.99"
    ];

    return view('/description_comic', $data);
});
