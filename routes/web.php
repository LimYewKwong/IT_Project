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
    return view('home');
});

Auth::routes();

//route to profile page
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
//route to about us page
Route::get('/about', 'AboutController@index')->name('about');
//route to contact us page
Route::get('/contact', 'ContactController@index')->name('contact');
//route to insurance page
Route::get('/insurance', 'InsuranceController@index')->name('insurance');
//route to Homepage
Route::get('/home', 'HomeController@index')->name('home');
