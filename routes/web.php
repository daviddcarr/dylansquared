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
});

// Route::get('/admin', 'RsvpController@show');

Route::post('/rsvp', 'RsvpController@store');

Route::get('/delete/{rsvp}', 'RsvpController@delete');

Route::get('/party/{slug}', 'PartyController@show');

Route::post('/password', 'RsvpPasswordsController@checkPassword');

Route::post('/newPassword', 'RsvpPasswordsController@store');

Route::post('/newParty', 'PartyController@store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
