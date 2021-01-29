<?php

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

Route::prefix('/')
    ->namespace('User')
    ->group(function (){
        Route::resource('/', 'HomepageController');
        Route::resource('/services', 'ServicesController');
        Route::resource('/works', 'WorksController');
    });

Route::prefix('home')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('/', 'DashboardController');
        Route::resource('/project', 'ProjectController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
