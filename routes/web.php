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
Route::get('/login',function()
{
	return view('Login');
});
/*Route::post('/welcome1.php',function()
{
	return console.log('welcome');
});*/

Route::get('/','mainController@index');
Route::get('/checklogin','mainController@checklogin');
Route::get('/successlogin','mainController@successlogin');
Route::get('/logout','mainController@logout');
