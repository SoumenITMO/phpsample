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

Route::get('/home', "LoginController@index");
Route::get('/getdata', "DashboardController@fetchAllUserData")->middleware('customAuth');
Route::get('/edituser/{uid}', "DashboardController@editUserData");
Route::post('/updateuser', "DashboardController@updateUser");
Route::post('/register', "DashboardController@register");
Route::post('/loginuser', "LoginController@doLogin");
Route::get('/deleteuser/{uid}', "DashboardController@deleteUser");
Route::get('/showregister', "DashboardController@createUser");

Route::get('/', function () {
    return view('welcome');
});
