<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'welcomeController@index');
Route::get('login', 'welcomeController@auth');
Route::get('register', 'welcomeController@register');
Route::post('loggedin', 'welcomeController@login');
Route::get('signup', 'usersController@create');

/*ARRANGE THE ROUTES TO THE APPROPRIATE CONFIG
FOR NOW I JUST PUT ALL IN WELCOMECONTROLLER - SEUN*/
Route::post('registerusers', 'usersController@store');
Route::get('post_a_job', 'welcomeController@post_a_job');
Route::get('project_details', 'welcomeController@project_details');
Route::get('payment_packages', 'welcomeController@payment_packages');
Route::get('oven', 'welcomeController@oven');
Route::get('forgot_password', 'welcomeController@forgot_password');
Route::get('reset_password', 'welcomeController@reset_password');
Route::get('order_confirm', 'welcomeController@order_confirm');