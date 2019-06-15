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
Route::get('/', 'CategoryController@index');
Route::get('/categories', 'CategoryController@index');
Route::get('/fancy', 'CategoryController@fancyindex');
Route::get('/categories.json', 'CategoryController@categoriesJSON');
Route::get('/assets.json', 'AssetController@assetsJSON');

Route::get('/locations.json', 'LocationController@locationsJSON');
Route::get('/locations', 'LocationController@fancy');
    