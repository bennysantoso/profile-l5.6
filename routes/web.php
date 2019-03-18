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
    return view('welcome');
});

Route::get('showname', 'ProfileController@showName');

Route::get('customer', 'ProfileController@showCustomerName');

Route::get('customer/{id}', 'ProfileController@showSelectedCustomerName');

Route::get('showgreeting', 'GreetingController@showGreeting');

Route::post('sayhello', 'GreetingController@sayHello');


Route::get('test-token', ['middleware' => 'token', 'uses' => 'ProfileController@showName']);
Route::get('test-log', ['middleware' => 'log', 'uses' => 'ProfileController@showName']);
Route::get('test-email', 'EmailController@sendEmailReminder');

Route::get('showregister', 'ProfileController@showRegister');
Route::post('registerform', 'ProfileController@registerFormUser');

