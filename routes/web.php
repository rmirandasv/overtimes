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

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate')->name('authenticate');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

// users
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index')->middleware('auth');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create')->middleware('auth');
Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('users.store')->middleware('auth');
Route::get('/users/{userId}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit')->middleware('auth');
Route::post('/users/{userId}/edit', 'App\Http\Controllers\UserController@update')->name('users.update')->middleware('auth');
Route::get('/users/{userId}/delete', 'App\Http\Controllers\UserController@showDelete')->name('users.showDelete')->middleware('auth');
Route::post('/users/{userId}/delete', 'App\Http\Controllers\UserController@delete')->name('users.delete')->middleware('auth');
Route::post('/users/{userId}/disable', 'App\Http\Controllers\UserController@disable')->name('users.disable')->middleware('auth');
Route::post('/users/{userId}/enable', 'App\Http\Controllers\UserController@enable')->name('users.enable')->middleware('auth');
Route::post('/users/{userId}/unlock', 'App\Http\Controllers\UserController@unlock')->name('users.unlock')->middleware('auth');

Route::get('/config', 'App\Http\Controllers\ConfigController@indexGlobal')->name('config.global')->middleware('auth');
Route::post('/config', 'App\Http\Controllers\ConfigController@storeGlobal')->name('config.storeglobal')->middleware('auth');

Route::get('/config/costs', 'App\Http\Controllers\ConfigController@costs')->name('config.costs')->middleware('auth');
Route::get('/config/costs/create', 'App\Http\Controllers\ConfigController@createCost')->name('config.addcost')->middleware('auth');
Route::post('/config/costs/create', 'App\Http\Controllers\ConfigController@storeCost')->name('config.storecost')->middleware('auth');

route::get('/overtimes', 'App\Http\Controllers\OvertimeController@index')->name('overtimes.index')->middleware('auth');
route::get('/overtimes/register', 'App\Http\Controllers\OvertimeController@create')->name('overtimes.create')->middleware('auth');
route::post('/overtimes/register', 'App\Http\Controllers\OvertimeController@store')->name('overtimes.store')->middleware('auth');