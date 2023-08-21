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

// home
Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

// characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// comics
Route::get('/comics.list', function () {
    $comics = config('comics');

    return view('comics.list', compact('comics'));
})->name('comics.list');

// comics detail
Route::get('/comics.detail', function () {
    $comics = config('comics');
    $comic = $comics[2];

    return view('comics.detail', compact('comic'));
})->name('comics.detail');

// movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// games
Route::get('/games', function () {
    return view('games');
})->name('games');

// collectables
Route::get('/collectables', function () {
    return view('collectables');
})->name('collectables');

// videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// news
Route::get('/news', function () {
    return view('news');
})->name('news');

// shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
