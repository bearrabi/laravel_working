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
    Route::get('index', 'DepartmentController@index')->name('department.index');
    Route::get('create', 'DepartmentController@create')->name('department.create');
    Route::post('store', 'DepartmentController@store')->name('department.store');
    Route::get('show/{id}', 'DepartmentController@show')->name('department.show');
    Route::get('edit/{id}', 'DepartmentController@edit')->name('department.edit');
    Route::post('update/{id}', 'DepartmentController@update')->name('department.update');
    Route::post('destroy/{id}', 'DepartmentController@destroy')->name('department.destroy');
});
Route::group(['prefix' => 'section'], function(){
    Route::get('index', 'SectionController@index')->name('section.index');
    Route::get('create', 'SectionController@create')->name('section.create');
    Route::post('store', 'SectionController@store')->name('section.store');
    Route::get('show/{id}', 'SectionController@show')->name('section.show');
    Route::get('edit/{id}', 'SectionController@edit')->name('section.edit');
    Route::post('update/{id}', 'SectionController@update')->name('section.update');
    Route::post('destroy/{id}', 'SectionController@destroy')->name('section.destroy');
});


