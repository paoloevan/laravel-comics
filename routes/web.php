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
    $comics_list = config('comics');

    return view('comics', $comics_list);
})->name('comics');

Route::get('/action-comics', function () {
    $comics_list = config('comics');

    return view('action', $comics_list);
})->name('action');

Route::get('/vampire-comics', function () {
    $comics_list = config('comics');

    return view('vampire', $comics_list);
})->name('vampire');

Route::get('/aquaman-comics', function () {
    $comics_list = config('comics');

    return view('aquaman', $comics_list);
})->name('aquaman');

Route::get('/batgirl-comics', function () {
    $comics_list = config('comics');

    return view('batgirl', $comics_list);
})->name('batgirl');

Route::get('/batman-comics', function () {
    $comics_list = config('comics');

    return view('batman', $comics_list);
})->name('batman');

Route::get('/bb-comics', function () {
    $comics_list = config('comics');

    return view('bb', $comics_list);
})->name('bb');

Route::get('/bs-comics', function () {
    $comics_list = config('comics');

    return view('bs', $comics_list);
})->name('bs');

Route::get('/bsa-comics', function () {
    $comics_list = config('comics');

    return view('bsa', $comics_list);
})->name('bsa');

Route::get('/bj-comics', function () {
    $comics_list = config('comics');

    return view('bj', $comics_list);
})->name('bj');

Route::get('/bjj-comics', function () {
    $comics_list = config('comics');

    return view('bjj', $comics_list);
})->name('bjj');

Route::get('/bat-comics', function () {
    $comics_list = config('comics');

    return view('bat', $comics_list);
})->name('bat');

Route::get('/cat-comics', function () {
    $comics_list = config('comics');

    return view('cat', $comics_list);
})->name('cat');
