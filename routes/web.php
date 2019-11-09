<?php

Route::group(['prefix'=>'/order'], function(){
    Route::get('/', 'Order@index');
    Route::post('/', 'Order@store');
    Route::get('/{id_order}', 'Order@show');
    Route::put('/{id_order}', 'Order@update');
});