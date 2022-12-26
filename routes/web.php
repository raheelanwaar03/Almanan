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
    return view('welcome');
});


Route::get('/About-Us', function () {
    return view('aboutUs');
});



Route::get('/Contact-Us', function () {
    return view('contactUs');
});


Route::get('/Services', function () {
    return view('ourServices');
});


Route::get('/LaVistaHomes', function () {
    return view('projects');
});


Route::get('/Videos', function () {
    return view('videoGellary');
});


Route::get('/SpanishVilla', function () {
    return view('spanishVilla');
});


Route::get('/LebertyMarket', function () {
    return view('lebertyMarket');
});

Route::get('/GreenLand', function () {
    return view('greenLand');
});

Route::get('/MannanTown', function () {
    return view('mannanTown');
});

Route::get('/AlMannanCity', function () {
    return view('alMannanCity');
});

Route::get('/GreenCity', function () {
    return view('greenCity');
});

Route::get('/CityPhaseI-II', function () {
    return view('cityPhase');
});
