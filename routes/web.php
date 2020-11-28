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

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');

// users
Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::get('/users/{userId}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::post('/users/{userId}/edit', 'App\Http\Controllers\UserController@update')->name('users.update');
Route::get('/users/{userId}/delete', 'App\Http\Controllers\UserController@showDelete')->name('users.showDelete');
Route::post('/users/{userId}/delete', 'App\Http\Controllers\UserController@delete')->name('users.delete');
Route::post('/users/{userId}/disable', 'App\Http\Controllers\UserController@disable')->name('users.disable');
Route::post('/users/{userId}/enable', 'App\Http\Controllers\UserController@enable')->name('users.enable');
Route::post('/users/{userId}/unlock', 'App\Http\Controllers\UserController@unlock')->name('users.unlock');

Route::get('/config', 'App\Http\Controllers\ConfigController@indexGlobal')->name('config.global');
Route::post('/config', 'App\Http\Controllers\ConfigController@storeGlobal')->name('config.storeglobal');

Route::get('/config/costs', 'App\Http\Controllers\ConfigController@costs')->name('config.costs');
Route::get('/config/costs/create', 'App\Http\Controllers\ConfigController@createCost')->name('config.addcost');
Route::post('/config/costs/create', 'App\Http\Controllers\ConfigController@storeCost')->name('config.storecost');

route::get('/overtimes', 'App\Http\Controllers\OvertimeController@index')->name('overtimes.index');
route::get('/overtimes/register', 'App\Http\Controllers\OvertimeController@create')->name('overtimes.create');
route::post('/overtimes/register', 'App\Http\Controllers\OvertimeController@store')->name('overtimes.store');