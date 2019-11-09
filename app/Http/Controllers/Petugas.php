<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Petugas extends Controller
{
    public function index()
    {
        $data = DB::table('petugas')->get();
        dd($data);

        // return view('example', $data);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $data = [
            'nama_petugas' => $request->input('nama_petugas'),
            'password' => $request->input('password'),
            'hp' => $request->input('hp')
        ];
        DB::table('petugas')->insert(
            $data
        );

        // return view('example', $data);

    }

    public function show($id_petugas)
    {
        $data = DB::table('petugas')->where('id_petugas', '=', $id_petugas);
        dd($data);


        // return view('example', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id_petugas)
    {
        $data = [
            'nama_petugas' => $request->input('nama_petugas'),
            'password' => $request->input('password'),
            'hp' => $request->input('hp')
        ];
        DB::table('petugas')->where('id_petugas', $id_petugas)->update(
            $data
        );
    }

    public function destroy($id_petugas)
    {
        DB::table('petugas')->where('id_petugas', '=', $id_petugas)->delete();    
    }
}
