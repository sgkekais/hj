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

Route::group(['prefix' => 'administration'], function () {
    Voyager::routes();
});

Route::get('/', 'HomeController@index')->name('home');

// Works
Route::get('works', 'WorkController@index')->name('works.index');
Route::get('/works/{work}', 'WorkController@show')->name('works.show');

// Static pages
Route::get('/contact', 'StaticPageController@contactForm')->name('contactForm');
Route::get('/{static_page}', 'StaticPageController@show');


