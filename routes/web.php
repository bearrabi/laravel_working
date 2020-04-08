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

Auth::routes();
Route::group(['prefix' => 'office'], function(){
    Route::get('index', 'OfficeController@index')->name('office.index');
    Route::get('create', 'OfficeController@create')->name('office.create');
    Route::post('store', 'OfficeController@store')->name('office.store');
    Route::get('show/{id}', 'OfficeController@show')->name('office.show');
    Route::get('edit/{id}', 'OfficeController@edit')->name('office.edit');
    Route::post('update/{id}', 'OfficeController@update')->name('office.update');
    Route::post('destroy/{id}', 'OfficeController@destroy')->name('office.destroy');
});
Route::group(['prefix' => 'department'], function(){
    Route::get('index', 'OfficeController@index')->name('office.index');
    Route::get('create', 'OfficeController@create')->name('office.create');
    Route::post('store', 'OfficeController@store')->name('office.store');
    Route::get('show/{id}', 'OfficeController@show')->name('office.show');
    Route::get('edit/{id}', 'OfficeController@edit')->name('office.edit');
    Route::post('update/{id}', 'OfficeController@update')->name('office.update');
    Route::post('destroy/{id}', 'OfficeController@destroy')->name('office.destroy');
});


