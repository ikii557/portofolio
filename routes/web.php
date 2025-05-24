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

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/portofolio-detail', function () {
    return view('pages.portofolio-detail');
});
Route::get('/portfolio', function () {
    return view('pages.portfolio');
});
Route::get('/resume', function () {
    return view('pages.resume');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/starter', function () {
    return view('pages.starter');
});
