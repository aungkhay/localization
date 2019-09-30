<?php

Route::group(['prefix' => '/{locale?}', 'middleware' => 'lang'], function(){
  Auth::routes();

  Route::get('/logout', function ()
  {
    Auth::logout();
    return redirect('/');
  });

  Route::get('/', function(){
    return view('welcome');
  });

  Route::get('hello', function(){
    return view('hello');
  })->name('hello');

  Route::get('/home', 'HomeController@index')->name('home');
});

