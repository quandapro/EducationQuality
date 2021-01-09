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
Route::get('/view_login', 'Auth\LoginController@index');

Route::get('/view_CTDT_programs', 'CTDTController@index');
Route::get('/view_CTDT_create_programs', 'CTDTController@create');
Route::get('/view_CTDT_show_programs/{id}', 'CTDTController@show');
Route::post('/view_CTDT_store_programs', 'CTDTController@store');
Route::post('/view_CTDT_update_programs/{id}', 'CTDTController@update');
Route::get('/view_CTDT_delete_programs/{id}', 'CTDTController@destroy');

Route::get('/view_CSGD_programs', 'CSGDController@index');
Route::get('/view_CSGD_create_programs', 'CSGDController@create');
Route::get('/view_CSGD_show_programs/{id}', 'CSGDController@show');
Route::post('/view_CSGD_store_programs', 'CSGDController@store');
Route::post('/view_CSGD_update_programs/{id}', 'CSGDController@update');
Route::get('/view_CSGD_delete_programs/{id}', 'CSGDController@destroy');

Route::get('/view_TC_CTDT_programs/{id}', 'TieuChiCTDTController@index');
Route::get('/view_TC_CTDT_create_programs', 'TieuChiCTDTController@create');
Route::get('/view_TC_CTDT_show_programs/{id}', 'TieuChiCTDTController@show');
Route::post('/view_TC_CTDT_store_programs', 'TieuChiCTDTController@store');
Route::post('/view_TC_CTDT_update_programs/{id}', 'TieuChiCTDTController@update');
Route::get('/view_TC_CTDT_delete_programs/{id}', 'TieuChiCTDTController@destroy');

Route::get('/view_TC_CSGD_programs/{id}', 'TieuChiCSGDController@index');
Route::get('/view_TC_CSGD_create_programs', 'TieuChiCSGDController@create');
Route::get('/view_TC_CSGD_show_programs/{id}', 'TieuChiCSGDController@show');
Route::post('/view_TC_CSGD_store_programs', 'TieuChiCSGDController@store');
Route::post('/view_TC_CSGD_update_programs/{id}', 'TieuChiCSGDController@update');
Route::get('/view_TC_CSGD_delete_programs/{id}', 'TieuChiCSGDController@destroy');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout','Auth\LoginController@logout');
Route::post('/login','Auth\LoginController@login');

Route::get('/admin_home', function () {
    return view('admin_home');
});
