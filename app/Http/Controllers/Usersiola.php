<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models pemberhentian
use App\Models\PemberhentianModels;

// models obejek kdh
use App\Models\ModelsObejekKdh;

// query data Kabupaten
use App\Models\ModelsDataKabupaten;
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

    /** method ini digunakan untuk menentukan apakah usernya memilih pengangkatan atau pemberhentian */
    public function pilihan(Request $request , ModelsDataKabupaten $kabupaten, ModelsObejekKdh $objekkdh)
    {
        $data = array(
            'pilihan' => $request->input,
//            'kirim' => $request->penyebabkdh
        );
        if ($data['pilihan'] == '1') {
            $data = array(
                // query semua data kabupaten dan objek kdh
                'kabupaten' => $kabupaten->all(),
                'objekkdh' => $objekkdh->all(),
                // fungsi nya menyeleksi opsi dari pilih layanan
                'form_pilihan' => $data['pilihan'],
//                'opsi_penyebab_kdh' => $data['kirim']
               );
            return view('layouts.tema.form.pemberhentian', compact('data'));
        } else if ($data['pilihan'] == '2') {
            $data = array(
                // query semua data kabupaten dan objek kdh
                'kabupaten' => $kabupaten->all(),
                'objekkdh' => $objekkdh->all(),
                // fungsi untuk memilih layanan
                'form' => $data['pilihan'],
//                'opsi_penyebab_kdh' => $data['kirim'],
            );
            return view('layouts.tema.form.pengangkatan', compact('data'));
        } else {
            return redirect('/user/view');
        }
    }

    public function upload_berkas_pemberhentian(Request $get_kdh) {
        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $get_kdh->validate([
            'nama' => 'required',
            'provinsi' => 'required'
        ],$costum);
        $data = array(
            'noreg' => $get_kdh->noreg,
            'kategori_permohonan' => $get_kdh->kategori_permohonan,
            'nama' => $get_kdh->nama,
            'jk' => $get_kdh->jk,
            'penyebabkdh' => $get_kdh->penyebabkdh,
            'objekkdh' => $get_kdh->objekkdh,
            'provinsi' => $get_kdh->provinsi,
            'kabupaten' => $get_kdh->kabupaten,
        );
        return view('layouts.tema.form.upload_penyebab_kdh',compact('data'));
    }

    public function upload_berkas_pengangkatan(Request $getPenyebabKdh){
        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $getPenyebabKdh->validate([
            'nama' => 'required',
            'provinsi' => 'required'
        ],$costum);

        $data = array(
            'noreg' => $getPenyebabKdh->noreg,
            'kategori_permohonan' => $getPenyebabKdh->kategori_permohonan,
            'nama' => $getPenyebabKdh->nama,
            'jk' => $getPenyebabKdh->jk,
            'penyebabkdh' => $getPenyebabKdh->penyebabkdh,
            'objekkdh' => $getPenyebabKdh->objekkdh,
            'provinsi' => $getPenyebabKdh->provinsi,
            'kabupaten' => $getPenyebabKdh->kabupaten,
        );
        return view('layouts.tema.form.upload_penyebab_kdh_pengangkatan',compact('data'));
    }

    public function pemberhentian(Request $request)
    {
        $namavalidasi = [
            'required' => ':attribute jangan di kosongkan',
            'mimetypes' => 'untuk file :attribute yang di izinkan hanya pdf',
            'unique' => 'anda sdh pernah mengirim permohonan sebelumnya',
            'max' => 'file yang di upload tidak boleh melebihi 1 mb'
        ];

        $request->validate([
            'noreg' => 'unique:table_pemberhentian',
            'kategori_permohonan' => 'required',
            'objekkdh' => 'required',
            'nama' => 'required',
            'provinsi' => 'required',
            'upload1' => 'file|mimetypes:application/pdf|max:1024',
            'upload2' => 'file|mimetypes:application/pdf|max:1024',
            'upload3' => 'file|mimetypes:application/pdf|max:1024',
            'upload4' => 'file|mimetypes:application/pdf|max:1024',
            'upload5' => 'file|mimetypes:application/pdf|max:1024',
            'upload6' => 'file|mimetypes:application/pdf|max:1024',
        ], $namavalidasi);


        // upload dokumen
        if (request()->hasFile('upload1')) {
            $upload1 = request()->file('upload1')->getClientOriginalName();
            request()->file('upload1')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload1, '');
        } else {
            $upload1 = 'null';
        }
        if (request()->hasFile('upload2')) {
            $upload2 = request()->file('upload2')->getClientOriginalName();
            request()->file('upload2')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload2, '');
        } else {
            $upload2 = 'null';
        }
        if (request()->hasFile('upload3')) {
            $upload3 = request()->file('upload3')->getClientOriginalName();
            request()->file('upload3')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload3, '');
        } else {
            $upload3 = 'null';
        }
        if (request()->hasFile('upload4')) {
            $upload4 = request()->file('upload4')->getClientOriginalName();
            request()->file('upload4')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload4, '');
        } else {
            $upload4 = 'null';
        }
        if (request()->hasFile('upload5')) {
            $upload5 = request()->file('upload5')->getClientOriginalName();
            request()->file('upload5')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload5, '');
        } else {
            $upload5 = 'null';
        }
        if (request()->hasFile('upload6')) {
            $upload6 = request()->file('upload6')->getClientOriginalName();
            request()->file('upload6')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload6, '');
        } else {
            $upload6 = 'null';
        }
        if (request()->hasFile('upload7')) {
            $upload7 = request()->file('upload7')->getClientOriginalName();
            request()->file('upload6')->storeAs('public/dokumen_pemberhentian', Auth::user()->noreg . '/' . $upload7, '');
        } else {
            $upload7 = 'null';
        }

        // memberi label nilai pada penyebab kdh yang di pilih untuk masuk kedalam field penyebab kdh pada table_pemberhentian
        if($request->penyebabkdh == '1') :
            $data_penyebab_kdh = 'Pengesahan Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Berakhir Masa Jabatan : ';
        else :
            $data_penyebab_kdh = 'Pemberhentian Bupati Dan/Atau Wakil Bupati Atau Walikota Dan/Atau Wakil Walikota Karena Meninggal Dunia : ';
        endif;



        PemberhentianModels::create([

            // insert to form
            'noreg' => $request->noreg,
            'kategori_permohonan' => $request->kategori_permohonan,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'objekkdh' => $request->objekkdh,
            'penyebabkdh' => $data_penyebab_kdh,

            // insert to dokumen
            'upload1' => $upload1,
            'upload2' => $upload2,
            'upload3' => $upload3,
            'upload4' => $upload4,
            'upload5' => $upload5,
            'upload6' => $upload6,
            'upload7' => $upload7,
        ]);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['status_kirim_permohonan' => 'sudah']);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['kategori_permohonan' => 'pemberhentian']);

        return redirect('/user/view')->with(['sukses' => 'data berhasil di kirim']);

    }

    public function pengangkatan(Request $pengangkatan)
    {
        $namavalidasi = [
            'required' => ':attribute jangan di kosongkan',
            'mimetypes' => 'untuk file :attribute yang di izinkan hanya pdf ',
            'unique' => 'anda sdh pernah mengirim permohonan sebelumnya'
        ];

        $pengangkatan->validate([
            'noreg' => 'required|unique:table_pengangkatan',
            'kategori_permohonan' => 'required',
            'nama' => 'required',
            'provinsi' => 'required',
            'upload1' => 'file|mimetypes:application/pdf|max:1024',
            'upload2' => 'file|mimetypes:application/pdf|max:1024',
            'upload3' => 'file|mimetypes:application/pdf|max:1024',
            'upload4' => 'file|mimetypes:application/pdf|max:1024',
            'upload5' => 'file|mimetypes:application/pdf|max:1024',
            'upload6' => 'file|mimetypes:application/pdf|max:1024',
            'upload7' => 'file|mimetypes:application/pdf|max:1024',
            'upload8' => 'file|mimetypes:application/pdf|max:1024',
            'upload9' => 'file|mimetypes:application/pdf|max:1024',
            'upload10' => 'file|mimetypes:application/pdf|max:1024',
            'upload11' => 'file|mimetypes:application/pdf|max:1024',
            'upload12' => 'file|mimetypes:application/pdf|max:1024',
            'upload13' => 'file|mimetypes:application/pdf|max:1024',
        ], $namavalidasi);

        // upload dokumen
        if (request()->hasFile('upload1')) {
            $upload1 = request()->file('upload1')->getClientOriginalName();
            request()->file('upload1')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload1, '');
        } else {
            $upload1 = 'null';
        }

        if (request()->hasFile('upload2')) {
            $upload2 = request()->file('upload2')->getClientOriginalName();
            request()->file('upload2')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload2, '');
        } else {
            $upload2 = 'null';
        }

        if (request()->hasFile('upload3')) {
            $upload3 = request()->file('upload3')->getClientOriginalName();
            request()->file('upload3')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload3, '');
        } else {
            $upload3 = 'null';
        }

        if (request()->hasFile('upload4')) {
            $upload4 = request()->file('upload4')->getClientOriginalName();
            request()->file('upload4')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload4, '');
        } else {
            $upload4 = 'null';
        }

        if (request()->hasFile('upload5')) {
            $upload5 = request()->file('upload5')->getClientOriginalName();
            request()->file('upload5')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload5, '');
        } else {
            $upload5 = 'null';
        }

        if (request()->hasFile('upload6')) {
            $upload6 = request()->file('upload6')->getClientOriginalName();
            request()->file('upload6')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload6, '');
        } else {
            $upload6 = 'null';
        }

        if (request()->hasFile('upload7')) {
            $upload7 = request()->file('upload7')->getClientOriginalName();
            request()->file('upload7')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload7, '');
        } else {
            $upload7 = 'null';
        }

        if (request()->hasFile('upload8')) {
            $upload8 = request()->file('upload8')->getClientOriginalName();
            request()->file('upload8')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload8, '');
        } else {
            $upload8 = 'null';
        }

        if (request()->hasFile('upload9')) {
            $upload9 = request()->file('upload9')->getClientOriginalName();
            request()->file('upload9')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload9, '');
        } else {
            $upload9 = 'null';
        }

        if (request()->hasFile('upload10')) {
            $upload10 = request()->file('upload10')->getClientOriginalName();
            request()->file('upload10')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload10, '');
        } else {
            $upload10 = 'null';
        }

        if (request()->hasFile('upload11')) {
            $upload11 = request()->file('upload11')->getClientOriginalName();
            request()->file('upload11')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload11, '');
        } else {
            $upload11 = 'null';
        }

        if (request()->hasFile('upload12')) {
            $upload12 = request()->file('upload12')->getClientOriginalName();
            request()->file('upload12')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload12, '');
        } else {
            $upload12 = 'null';
        }

        if (request()->hasFile('upload13')) {
            $upload13 = request()->file('upload13')->getClientOriginalName();
            request()->file('upload13')->storeAs('public/dokumen_pengangkatan', Auth::user()->noreg . '/' . $upload13, '');
        } else {
            $upload13 = 'null';
        }

        // memberi label nilai pada penyebab kdh yang di pilih untuk masuk kedalam field penyebab kdh pada table_pemberhentian
        if($pengangkatan->penyebabkdh == '1') :
            $data_penyebab_kdh = 'Pengangkatan Pasangan Calon Bupati Dan Wakil Bupati Atau Walikota Dan Wakil Walikota Terpilih Hasil Pilkada';
        else :
            $data_penyebab_kdh = 'Pengangkatan Wakil Bupati Atau Wakil Walikota Hasil Pemilihan DPRD (Pengisian  Kekosongan) : ';
        endif;


        PengangkatanModels::create([
            // insert to form
            'noreg' => $pengangkatan->noreg,
            'kategori_permohonan' => $pengangkatan->kategori_permohonan,
            'nama' => $pengangkatan->nama,
            'jk' => $pengangkatan->jk,
            'provinsi' => $pengangkatan->provinsi,
            'kabupaten' => $pengangkatan->kabupaten,
            'objekkdh' => $pengangkatan->objekkdh,
            'penyebabkdh' => $data_penyebab_kdh,

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

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['kategori_permohonan' => 'pengangkatan']);

        return redirect('/user/view')->with(['sukses' => 'data berhasil di kirim']);
    }
}
