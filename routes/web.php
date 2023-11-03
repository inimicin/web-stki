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
    return view('web.fronts.landing-page');
})->name('landing-page');

Route::get('/admin', function(){
    return view('web.dashboards.dashboard');
});

Route::get('/login', function(){
    return view('web.auth.login');
})->name('login');

Route::get('/register', function(){
    return view('web.auth.register');
})->name('register');
