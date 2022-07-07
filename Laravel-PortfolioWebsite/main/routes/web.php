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

Route::get('/main', function () {
    return view('main');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/codingchallenge', function () {
    return view('codingchallenge');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/index', function () {
    return view('index');
});



Auth::routes();

