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

Route::get('/login', 'MemberController@login');
Route::post('/login', 'MemberController@loginValidate');
Route::get('/logout', 'MemberController@logout');
Route::get('/register', 'MemberController@register');
Route::post('/', 'MemberController@postRegister');
Route::resource('/message', 'MessageController');
