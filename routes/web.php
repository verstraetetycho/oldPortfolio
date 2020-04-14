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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/portfolio', 'ProjectController@index')->name('portfolio');

Route::group(['middleware' => ['auth']], function () {
    // admin routes
    Route::group(['prefix' => 'admin'], function () {
        Route::name('admin.')->group(function () {
            Route::get('/', 'AdminController@index')->name('index');
        });
    });
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
