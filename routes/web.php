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

Route::get('/view_TC_CTDT_programs', 'TieuChiCTDTController@index');
Route::get('/view_TC_CTDT_create_programs', 'TieuChiCTDTController@create');
Route::get('/view_TC_CTDT_show_programs/{id}', 'TieuChiCTDTController@show');
Route::post('/view_TC_CTDT_store_programs', 'TieuChiCTDTController@store');
Route::post('/view_TC_CTDT_update_programs/{id}', 'TieuChiCTDTController@update');
Route::get('/view_TC_CTDT_delete_programs/{id}', 'TieuChiCTDTController@destroy');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout','Auth\LoginController@logout');
Route::post('/login','Auth\LoginController@login');

Route::get('/admin_home', function () {
    return view('admin_home');
});


Route::get('/nguoikiemdinh-records','NgKiemDinhController@index');
Route::get('/destroy-inspection/{id}','NgKiemDinhController@destroy');
Route::get('/update-inspection/{id}','NgKiemDinhController@show');
Route::post('/update-inspection/{id}','NgKiemDinhController@update');
Route::get('/nguoikiemdinh-create','NgKiemDinhController@create');
Route::post('/nguoikiemdinh-store','NgKiemDinhController@store');

Route::get('/donvikiemdinh-records','DonviKiemDinhController@index');
Route::get('/donvikiemdinh-create','DonviKiemDinhController@create');
Route::post('/donvikiemdinh-store','DonViKiemDinhController@store');
Route::get('/update-donvikiemdinh/{id}','DonViKiemDinhController@show');
Route::post('/update-donvikiemdinh/{id}','DonViKiemDinhController@update');
Route::get('/destroy-donvikiemdinh/{id}','DonViKiemDinhController@destroy');

Route::get('/users-records','UserController@index');
Route::get('/user-create','UserController@create');
Route::post('/user-store','UserController@store');

Route::get('/update-user/{id}','UserController@show');
Route::post('/update-user/{id}','UserController@update');

Route::get('/accounts-records','AccountController@index');
Route::get('/update-account/{id}','AccountController@show');
Route::post('/update-account/{id}','AccountController@update');

Route::get('/destroy-user/{id}','UserController@destroy');
Route::get('/update-user/{id}','UserController@show');
Route::post('/update-user/{id}','UserController@update');

