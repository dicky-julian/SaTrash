<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Harga extends Controller
{
    public function index()
    {
        $data = DB::table('harga')->get();
        dd($data);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = [
            'nama_sampah' => $request->input('nama_sampah'),
            'harga' => $request->input('harga'),
        ];

        DB::table('harga_sampah')->insert(
            $data
        );
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id_harga_sampah)
    {
        $data = [
            'nama_sampah' => $request->input('nama_sampah'),
            'harga' => $request->input('harga'),
        ];

        DB::table('harga_sampah')->where('id_harga_sampah', $id_harga_sampah)->update(
            $data
        );    
    }

    public function destroy($id_harga_sampah)
    {
        DB::table('harga_sampah')->where('id_harga_sampah', '=', $id_harga_sampah)->delete();
    }
}
