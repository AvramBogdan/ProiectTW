<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('contact', 'ControlPagini@getContacts');

Route::get('about', 'ControlPagini@getAbout');

Route::get('/', 'ControlPagini@getIndex'); 

Route::get('Home','ControlPagini@getHomePage');

 
