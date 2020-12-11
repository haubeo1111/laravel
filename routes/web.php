<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/layout', function () {
    return view('');
});
Route::get('/dangkydonphuckhao', 'DonphuckhaoController@create')->name('dangkydonphuckhao');
Route::post('/savedonphuckhao', 'DonphuckhaoController@store')->name('savedonphuckhao');
Route::get('/indexdonphuckhao', 'DonphuckhaoController@index')->name('danhsachdonphuckhao');
Route::get('/editdonphuckhao/{id}', 'DonphuckhaoController@edit')->name('editdonphuckhao');
Route::post('/updatedonphuckhao', 'DonphuckhaoController@update')->name('updatedonphuckhao');
Route::get('/deletedonphuckhao/{id}', 'DonphuckhaoController@destroy')->name('deletedonphuckhao');

Route::get('/dangkymonthi', 'MonthiController@create')->name('dangkymonthi');
Route::post('/savemonthi', 'MonthiController@store')->name('savemonthi');
Route::get('/indexmonthi', 'MonthiController@index')->name('danhsachmonthi');
Route::get('/editmonthi/{id}', 'MonthiController@edit')->name('editmonthi');
Route::post('/updatemonthi', 'MonthiController@update')->name('updatemonthi');
Route::get('/deletemonthi/{id}', 'MonthiController@destroy')->name('deletemonthi');

Route::get('/dangkytruongptth', 'TruongptthController@create')->name('dangkytruongptth');
Route::post('/savetruongptth', 'TruongptthController@store')->name('savetruongptth');
Route::get('/indextruongptth', 'TruongptthController@index')->name('danhsachtruongptth');
Route::get('/edittruongptth/{id}', 'TruongptthController@edit')->name('edittruongptth');
Route::post('/updatetruongptth', 'TruongptthController@update')->name('updatetruongptth');
Route::get('/deletetruongptth/{id}', 'TruongptthController@destroy')->name('deletetruongptth');

Route::get('/dangkyhocsinh', 'HocsinhController@create')->name('dangkyhocsinh');
Route::post('/savehocsinh', 'HocsinhController@store')->name('savehocsinh');
Route::get('/indexhocsinh', 'HocsinhController@index')->name('danhsachhocsinh');
Route::get('/edithocsinh/{id}', 'HocsinhController@edit')->name('edithocsinh');
Route::post('/updatehocsinh', 'HocsinhController@update')->name('updatehocsinh');
Route::get('/deletehocsinh/{id}', 'HocsinhController@destroy')->name('deletehocsinh');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
