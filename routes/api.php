<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::group(['prefix'=>'/order'], function(){
    Route::get('/', function () {
        $data = DB::table('order')->get();
        return response()->json($data);
    });
});
