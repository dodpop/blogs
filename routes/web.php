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
    return view('main');
});

// Route::get('/test', 'HomeController@index');
// Route::get('/product/{id}', 'HomeController@product');
// Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/contact', 'PagesController@contact');
// Route::get('/', 'PagesController@services');

Route::resource('tasks','TaskController');
Route::get('/search', 'searchController@index');