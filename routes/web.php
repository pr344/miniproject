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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact','PagesController@contact')->name('contact');

Route::get('/signin', 'PagesController@signin')->name('signin');

Route::get('/signout','PagesController@signout')->name('signout');

Route::get('/signup','PagesController@register')->name('register');

Route::get('/messages', 'PagesController@messages')->name('messages');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');

Route::post('/contact', 'PagesController@store')->name('contact.store');