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

Route::get('locale/{locale}', 'LocaleController@update')->name('frontend.locale');
Route::post('theme', 'LocaleController@change')->name('change.theme');

Route::middleware(['frontend.locales'])->group(function () {

    Route::get('/', 'FrontendController@index')->name('home');

    Route::get('/about', 'FrontendController@about')->name('about');

    Route::get('/services', 'FrontendController@services')->name('services');

    Route::get('/contact', 'FrontendController@contact')->name('contact');

    Route::post('/contact', 'FrontendController@contactPost')->name('contact.post');

    Route::post('/subscribe', 'FrontendController@subscribePost')->name('subscribe.post');
});
