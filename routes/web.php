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


Auth::routes();

Route::get('/', 'HomeController@index')->name('/');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('user', 'UserController')->middleware('prevent-back-history');
});

Route::resource('categories', 'CategoriesController');

Route::resource('topic', 'TopicController')->middleware('prevent-back-history');

Route::resource('subtopic', 'SubtopicController')->middleware('user');

Route::get('contact-us', 'ContactFormController@create')->name('contact-us');

Route::post('contact', 'ContactFormController@store');

Route::post('/search', 'HomeController@search')->name('search');
