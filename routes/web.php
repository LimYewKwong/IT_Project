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

Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::post('admin/dashboard', 'AdminController@getAddons')->name('admin.dashboard.addons');
Route::post('admin/dashboardsearch', 'AdminController@adminDashboardSearch')->name('admin.dashboard.search');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::get('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register','Admin\RegisterController@register');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@sendMail')->name('contact.send');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/purchases', 'PurchasesController@index')->name('purchases');
Route::post('/purchases', 'PurchasesController@getAddons')->name('purchases.addons');

Route::post('/searchpurchases', 'SearchPurchasesController@searchingFunction')->name('searchpurchases');

Route::get('/insurance', 'InsurancesController@create')->name('insurance');
Route::get('/insurance/b', 'InsurancesController@back')->name('insurance');
Route::post('/insurance', 'InsurancesController@basicDetails')->name('insurance');
Route::post('/insurance/details', 'InsurancesController@details');
Route::post('/insurance/payment', 'InsurancesController@payment');
Route::post('/insurance/store', 'InsurancesController@store')->name('insurance.store');
Route::get('/insurance/success', 'InsurancesController@success')->name('success');
