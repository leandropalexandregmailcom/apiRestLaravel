<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function() {

        Route::get('index', 'App\Http\Controllers\UserController@index')->name('index');
        Route::get('show', 'App\Http\Controllers\UserController@show')->name('show');
        Route::post('create', 'App\Http\Controllers\UserController@create')->name('create');
        Route::get('edit', 'App\Http\Controllers\UserController@edit')->name('edit');
        Route::post('update', 'App\Http\Controllers\UserController@update')->name('update');
        Route::post('delete', 'App\Http\Controllers\UserController@delete')->name('delete');

});
