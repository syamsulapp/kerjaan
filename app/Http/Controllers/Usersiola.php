<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UsersiolaModels;


class Usersiola extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view() {

        return view('layouts.tema.dashboard.dashboard');
    }
    public function pilihan(Request $request) {

        if($request->input1 == '1') {
            return view('layouts.tema.form.pemberhentian');
        } else {
            return view('layouts.tema.form.pemangkatan');
        }

    }

    public function pemberhentian(Request $request) {
        
        $namavalidasi = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' => 'untuk file :attribute yang di izinkan hanya jpg / png'
        ];
        $request->validate([
            'nama' => 'required',
            'provinsi' => 'required',
            'upload1' => 'required|file|mimes:jpg,png|max:256',
            'upload2' => 'required|file|mimes:jpg,png|max:256',
            'upload3' => 'required|file|mimes:jpg,png|max:256',
            'upload4' => 'required|file|mimes:jpg,png|max:256',
            'upload5' => 'required|file|mimes:jpg,png|max:256',
            'upload6' => 'required|file|mimes:jpg,png|max:256',
        ],$namavalidasi);

        UsersiolaModels::create([
            'noreg' => $request->noreg,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'objekkdh' => $request->objekkdh,
            'penyebabkdh' => $request->penyebabkdh,
            'upload1' => $request->upload1->getClientOriginalName(),
            'upload2' => $request->upload2->getClientOriginalName(),
            'upload3' => $request->upload3->getClientOriginalName(),
            'upload4' => $request->upload4->getClientOriginalName(),
            'upload5' => $request->upload5->getClientOriginalName(),
            'upload6' => $request->upload6->getClientOriginalName(),
        ]);
        return redirect('/user/view')->with(['sukses' => 'data berhasil di kirim']);
    }
}