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
})->name('home');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/dopo', function () {
    return view('dopo_il_corso');
})->name('dopo');

Route::get('/lezione', function () {
    return view('lezione_gratuita');
})->name('lezione');

Route::get('/assumi', function () {
    return view('assumi_i_nostri_studenti');
})->name('assumi');



Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
