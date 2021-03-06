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

Route::get('/', 'HomeController@index');
Route::get('/faqs', 'HomeController@faqs');
Route::get('/thanks', 'RsvpController@thanks');

// Route::get('/admin', 'RsvpController@show');

Route::post('/rsvp', 'RsvpController@store');

Route::get('/delete/{rsvp}', 'RsvpController@delete');

Route::get('/party/{slug}', 'PartyController@show');

Route::post('/password', 'RsvpPasswordController@checkPassword');

Route::post('/newPassword', 'RsvpPasswordController@store');

Route::post('/newParty', 'PartyController@store');

Auth::routes();

Route::get('/admin', 'HomeController@admin')->name('admin');
