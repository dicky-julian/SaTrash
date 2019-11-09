<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $data = DB::table('user')->get();
        dd($data);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = [
            'nama_user' => $request->input('nama_user'),
            'password' => $request->input('password'),
            'hp' => $request->input('hp'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ];

        DB::table('user')->insert(
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

    public function update(Request $request, $id_user)
    {
        $data = [
            'nama_user' => $request->input('nama_user'),
            'password' => $request->input('password'),
            'hp' => $request->input('hp'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude')
        ];
        DB::table('user')->where('id_user', $id_user)->update(
            $data
        );    
    }

    public function destroy($id_user)
    {
        DB::table('user')->where('user', '=', $id_user)->delete();
    }
}
