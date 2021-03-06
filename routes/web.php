<?php

use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/create', 'GuestController@create') -> name('create');
Route::post('/create/store', 'GuestController@store') -> name('store');

Route::get('/api/list/postcard', 'ApiController@getPostcard') -> name('api.list.postcard');

Route::post('/register', 'Auth\RegisterController@register') ->name('register');
Route::post('/login', 'Auth\LoginController@login') ->name('login');
Route::get('/logout', 'Auth\LoginController@logout') ->name('logout');
