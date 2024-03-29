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

Route::get('/', 'FrontendController@index')->name('home');

Route::post('/request', 'FrontendController@requestPost')->name('request.post');

Route::get('/thanks', 'FrontendController@thanks')->name('thanks.page');

Route::get('/scan/code', 'FrontendController@scan')->name('scan.page');
