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
//Route for home page
Route::get('/', 'ContactController@index');
// Route for send message form page
Route::get('/send-message/{mobile}/{name}', 'ContactController@sendMessagePage');
// Route for post message
Route::post('send_otp', 'MessageController@validateNewRequest')->name('send_otp');
