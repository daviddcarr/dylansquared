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
Route::get('/rsvp', function () {
    return view('pages.rsvp');
});
Route::get('/thanks', function() {
    return view('pages.thanks');
});

Route::post('/rsvp', 'RsvpController@store');
