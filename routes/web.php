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

Route::get('/',"UsersController@index");
Route::post('/',"UsersController@index");
//新規登録機能
Route::get("signup","Auth\RegisterController@showRegistrationForm")->name("signup.get");
Route::post("signup","Auth\RegisterController@Register")->name("signup.post");
//ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
//詳細ページ
Route::get("show/{id}","DateController@show");

//登録ページ
Route::get("schedule","DateController@create");
//登録処理
Route::post("schedule","DateController@store")->name("store");