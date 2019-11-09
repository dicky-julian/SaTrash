<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix'=>'/order'], function(){
    Route::get('/', 'Order@index');
    Route::post('/', 'Order@store');
    Route::get('/{id_order}', 'Order@show');
    Route::put('/{id_order}', 'Order@update');
    Route::delete('/{id_order}', 'Order@destroy');
    Route::delete('/{id_order}', 'Order@destroy');
});

Route::group(['prefix'=>'/user'], function(){
    Route::get('/', 'User@index');
    Route::post('/', 'User@store');
    Route::get('/{id_user}', 'User@show');
    Route::put('/{id_user}', 'User@update');
    Route::delete('/{id_user}', 'User@destroy');
});

Route::group(['prefix'=>'/petugas'], function(){
    Route::get('/', 'Petugas@index');
    Route::post('/', 'Petugas@store');
    Route::get('/{id_petugas}', 'Petugas@show');
    Route::put('/{id_petugas}', 'Petugas@update');
    Route::delete('/{id_petugas}', 'Petugas@destroy');
});

Route::group(['prefix'=>'/harga'], function(){
    Route::get('/', 'Harga@index');
    Route::post('/', 'Harga@store');
    Route::get('/{id_harga}', 'Harga@show');
    Route::put('/{id_harga}', 'Harga@update');
    Route::delete('/{id_harga}', 'Harga@destroy');
});

