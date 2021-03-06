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

Route::get('foo',function(){
    return "Hello World";
});

Route::get('/user/login','UserController@login');

Route::post('/Login/doLogin','LoginController@doLogin');

Route::get('/Login/testUrl','LoginController@testUrl');

Route::get('/user/index','UserController@show');

