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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('cells/{cell}', 'CellController@edit')->name('cell.edit');
    Route::put('cells/{cell}', 'CellController@update')->name('cell.update');

    Route::namespace('Ajax')->group(function () {
        Route::delete('cells/{cell}', 'CellController@destroy')->name('ajax.cell.delete');
    });
});
