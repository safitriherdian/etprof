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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/detail', 'App\Http\Controllers\PagesController@detail');
Route::get('/login_user', 'App\Http\Controllers\PagesController@login');
Route::get('/register', 'App\Http\Controllers\PagesController@register');