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

Auth::routes();

Route::get('/welcome', 'page_homeController@index');
Route::get('/admin_home', 'admin_homeController@index');
Route::get('/page_event', 'page_eventController@index');
Route::get('/page_intro', 'page_introController@index');
Route::get('/page_quality', 'page_qualityController@index');
Route::get('/page_quality_item', 'page_quality_itemController@index');
Route::get('/login', 'loginController@index');

