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
