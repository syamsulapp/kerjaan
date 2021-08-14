<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models pemberhentian
use App\Models\PemberhentianModels;

// models pengangkatan
use App\Models\PengangkatanModels;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usersiola extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        return view('layouts.tema.dashboard.dashboard');
    }
    public function pilihan(Request $request)
    {
        $status['form'] = $request->input;
        if ($status['form'] == '1') {
            $data['form'] = $status['form'];
            return view('layouts.tema.form.pemberhentian', compact('data'));
        } else {
            $data['form'] = $status['form'];
            return view('layouts.tema.form.pengangkatan', compact('data'));
        }
    }

    public function pemberhentian(Request $request)
    {

        $namavalidasi = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' => 'untuk file :attribute yang di izinkan hanya jpg / png',
            'unique' => 'anda sdh pernah mengirim permohonan sebelumnya'
        ];


        $request->validate([
            'noreg' => 'unique:table_pemberhentian',
            'kategori_permohonan' => 'required',
            'nama' => 'required',
            'provinsi' => 'required',
            'upload1' => 'required|file|mimes:jpg,png|max:256',
            'upload2' => 'required|file|mimes:jpg,png|max:256',
            'upload3' => 'required|file|mimes:jpg,png|max:256',
            'upload4' => 'required|file|mimes:jpg,png|max:256',
            'upload5' => 'required|file|mimes:jpg,png|max:256',
            'upload6' => 'required|file|mimes:jpg,png|max:256',
        ], $namavalidasi);

        // upload dokumen
        if (request()->hasFile('upload1')) {
            $upload1 = request()->file('upload1')->getClientOriginalName();
            request()->file('upload1')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload1, '');
        }
        if (request()->hasFile('upload2')) {
            $upload2 = request()->file('upload2')->getClientOriginalName();
            request()->file('upload2')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload2, '');
        }
        if (request()->hasFile('upload3')) {
            $upload3 = request()->file('upload3')->getClientOriginalName();
            request()->file('upload3')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload3, '');
        }
        if (request()->hasFile('upload4')) {
            $upload4 = request()->file('upload4')->getClientOriginalName();
            request()->file('upload4')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload4, '');
        }
        if (request()->hasFile('upload5')) {
            $upload5 = request()->file('upload5')->getClientOriginalName();
            request()->file('upload5')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload5, '');
        }
        if (request()->hasFile('upload6')) {
            $upload6 = request()->file('upload6')->getClientOriginalName();
            request()->file('upload6')->storeAs('dokumen_pemberhentian', Auth::user()->id . '/' . $upload6, '');
        }

        PemberhentianModels::create([

            // insert to form
            'noreg' => $request->noreg,
            'kategori_permohonan' => $request->kategori_permohonan,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'objekkdh' => $request->objekkdh,
            'penyebabkdh' => $request->penyebabkdh,

            // insert to dokumen
            'upload1' => $upload1,
            'upload2' => $upload2,
            'upload3' => $upload3,
            'upload4' => $upload4,
            'upload5' => $upload5,
            'upload6' => $upload6,
        ]);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['status_kirim_permohonan' => 'sudah']);

        return redirect('/user/view')->with(['sukses' => 'data berhasil di kirim']);
    }

    public function pengangkatan(Request $pengangkatan)
    {
        $namavalidasi = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' => 'untuk file :attribute yang di izinkan hanya jpg / png',
            'unique' => 'anda sdh pernah mengirim permohonan sebelumnya'
        ];

        $pengangkatan->validate([
            'noreg' => 'required|unique:table_pengangkatan',
            'kategori_permohonan' => 'required',
            'nama' => 'required',
            'provinsi' => 'required',
            'upload1' => 'required|file|mimes:jpg,png|max:256',
            'upload2' => 'required|file|mimes:jpg,png|max:256',
            'upload3' => 'required|file|mimes:jpg,png|max:256',
            'upload4' => 'required|file|mimes:jpg,png|max:256',
            'upload5' => 'required|file|mimes:jpg,png|max:256',
            'upload6' => 'required|file|mimes:jpg,png|max:256',
            'upload7' => 'required|file|mimes:jpg,png|max:256',
            'upload8' => 'required|file|mimes:jpg,png|max:256',
            'upload9' => 'required|file|mimes:jpg,png|max:256',
            'upload10' => 'required|file|mimes:jpg,png|max:256',
            'upload11' => 'required|file|mimes:jpg,png|max:256',
            'upload12' => 'required|file|mimes:jpg,png|max:256',
            'upload13' => 'required|file|mimes:jpg,png|max:256',
        ], $namavalidasi);

        // upload dokumen
        if (request()->hasFile('upload1')) {
            $upload1 = request()->file('upload1')->getClientOriginalName();
            request()->file('upload1')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload1, '');
        }
        if (request()->hasFile('upload2')) {
            $upload2 = request()->file('upload2')->getClientOriginalName();
            request()->file('upload2')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload2, '');
        }
        if (request()->hasFile('upload3')) {
            $upload3 = request()->file('upload3')->getClientOriginalName();
            request()->file('upload3')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload3, '');
        }
        if (request()->hasFile('upload4')) {
            $upload4 = request()->file('upload4')->getClientOriginalName();
            request()->file('upload4')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload4, '');
        }
        if (request()->hasFile('upload5')) {
            $upload5 = request()->file('upload5')->getClientOriginalName();
            request()->file('upload5')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload5, '');
        }
        if (request()->hasFile('upload6')) {
            $upload6 = request()->file('upload6')->getClientOriginalName();
            request()->file('upload6')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload6, '');
        }
        if (request()->hasFile('upload7')) {
            $upload7 = request()->file('upload7')->getClientOriginalName();
            request()->file('upload7')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload7, '');
        }
        if (request()->hasFile('upload8')) {
            $upload8 = request()->file('upload8')->getClientOriginalName();
            request()->file('upload8')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload8, '');
        }
        if (request()->hasFile('upload9')) {
            $upload9 = request()->file('upload9')->getClientOriginalName();
            request()->file('upload9')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload9, '');
        }
        if (request()->hasFile('upload10')) {
            $upload10 = request()->file('upload10')->getClientOriginalName();
            request()->file('upload10')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload10, '');
        }
        if (request()->hasFile('upload11')) {
            $upload11 = request()->file('upload11')->getClientOriginalName();
            request()->file('upload11')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload11, '');
        }
        if (request()->hasFile('upload12')) {
            $upload12 = request()->file('upload12')->getClientOriginalName();
            request()->file('upload12')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload12, '');
        }
        if (request()->hasFile('upload13')) {
            $upload13 = request()->file('upload13')->getClientOriginalName();
            request()->file('upload13')->storeAs('dokumen_pengangkatan', Auth::user()->id . '/' . $upload13, '');
        }

        PengangkatanModels::create([
            // insert to form
            'noreg' => $pengangkatan->noreg,
            'kategori_permohonan' => $pengangkatan->kategori_permohonan,
            'nama' => $pengangkatan->nama,
            'jk' => $pengangkatan->jk,
            'provinsi' => $pengangkatan->provinsi,
            'kabupaten' => $pengangkatan->kabupaten,
            'objekkdh' => $pengangkatan->objekkdh,
            'penyebabkdh' => $pengangkatan->penyebabkdh,

            // insert to dokumen
            'upload1' => $upload1,
            'upload2' => $upload2,
            'upload3' => $upload3,
            'upload4' => $upload4,
            'upload5' => $upload5,
            'upload6' => $upload6,
            'upload7' => $upload7,
            'upload8' => $upload8,
            'upload9' => $upload9,
            'upload10' => $upload10,
            'upload11' => $upload11,
            'upload12' => $upload12,
            'upload13' => $upload13,

        ]);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['status_kirim_permohonan' => 'sudah']);

        return redirect('/user/view')->with(['sukses' => 'data berhasil di kirim']);
    }
}
