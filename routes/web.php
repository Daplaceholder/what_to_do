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
    return view('shipment');
})->name('shipment');

Route::get('/ships', function () {
    return view('ships');
})->name('ships');

Route::get('/crew', function () {
    return view('crew');
})->name('crew');

Route::get('/routes', function () {
    return view('routes');
})->name('routes');

Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/duty', function () {
    return view('duty');
})->name('duty');
