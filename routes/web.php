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
    return redirect('lang/en');
});

Route::group(['prefix' =>'/lang/{locale}', 'middleware'=>'lang'], function(){

    Route::get('/', function($lang){

        return view('welcome');
    });

    Route::get('hello', function(){

        return view('hello');

    })->name('hello');
});