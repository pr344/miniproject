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

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::get('/signout', function () {
    return view('pages.signout');
})->name('signout');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('register');


Route::get('/messages', function () {
    return view('pages.messages');
})->name('messages');

Route::post('/contact', function () {
   $data =request()->all();

    echo "From: ".$data['email'], '<br>';
    echo "Message: ".$data['body'];
})->name('read');