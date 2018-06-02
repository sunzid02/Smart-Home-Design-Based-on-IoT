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
    return redirect()->route('file.index');
});

Route::get('/file', 'FileController@index')->name('file.index');
Route::post('/file', 'FileController@store')->name('store.index');
Route::post('/file/save', 'FileController@save')->name('save.index');
Route::get('/password','PasswordController@index')->name('password.index');
Route::post('/password','PasswordController@verify')->name('password.varify');
Route::get('/check', 'CheckController@index')->name('check.index');
Route::post('/check', 'CheckController@verify')->name('check.verify');

Route::get('/register/show', 'RegisterShowController@index')->name('registershow.index');
Route::post('/register/show', 'RegisterShowController@store')->name('registershow.store');
Route::get('/register/users', 'RegisterShowController@showAllUsers')->name('registershow.showAllUsers');
Route::get('/register/edit/{id}', 'RegisterShowController@edit')->name('registershow.edit');
Route::post('/register/edit/{id}', 'RegisterShowController@update')->name('registershow.update');
Route::get('/register/deactivate/{id}', 'RegisterShowController@deactivateUser')->name('registershow.deactivateUser');
Route::get('/register/activate/{id}', 'RegisterShowController@activateUser')->name('registershow.activateUser');


Route::get('/home/room', 'RoomController@index')->name('room.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Test sunzid Email
Route::get('sendemail', 'MailController@send');
