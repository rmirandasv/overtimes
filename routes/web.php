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

Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');

route::get('/overtimes', 'App\Http\Controllers\OvertimeController@index')->name('overtimes.index');

route::get('/config', 'App\Http\Controllers\ConfigController@index')->name('config.index');