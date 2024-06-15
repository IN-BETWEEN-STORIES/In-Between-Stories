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

Route::get('/middle-years', function () {
    return view('middle-years.main');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/compressed', function () {
    return view('home.compressed');
});

Route::get('/website-day1', function () {
    return view('website-day1.index');
});

Route::get('/website-day3', function () {
    return view('website-day3.index');
});
