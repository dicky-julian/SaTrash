<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Order extends Controller
{
    public function index()
    {
        $data = DB::table('order')->get();
        dd($data);

        // return view('example', $data);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $data = [
            'id_user' => $request->input('id_user'),
            'id_petugas' => $request->input('id_petugas'),
        ];
        DB::table('order')->insert(
            $data
        );

        // return view('example', $data);

    }

    public function show($id_order)
    {
        $data = DB::table('order')->where('id_order', '=', $id_order);
        dd($data);


        // return view('example', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id_order)
    {
        $data = [
            'id_user' => $request->input('id_user'),
            'id_petugas' => $request->input('id_petugas'),
        ];
        DB::table('order')->where('id_order', $id_order)->update(
            $data
        );
    }

    public function destroy($id_order)
    {
        DB::table('order')->where('id_order', '=', $id_order)->delete();    
    }
}
