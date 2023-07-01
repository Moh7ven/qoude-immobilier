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
Route::get('/about', function () {
    return view('about');
});

Route::get('/biens', function () {
    return view('biens');
});

Route::get('/suggestion', function () {
    return view('suggestion');
});

Route::get('/agent_login', function () {
    return view('agent_login');
});

Route::get('/user_login', function () {
    return view('user_login');
});

Route::get('/detail_biens', function () {
    return view('detail_biens');
});

Route::get('/groupe_bien', function () {
    return view('groupe_bien');
});
