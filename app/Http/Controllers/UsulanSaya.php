<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model buat relasi ke table pengangkatan
use App\Models\ModelsUsulanSaya;
// model buat relasi ke table pemberhentian
use App\Models\ModelsUsulanSaya2;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use App\Models\UserCheck;

class UsulanSaya extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function usulan()
    {
        $pemberhentian = DB::table('table_pemberhentian')->where('kategori_permohonan')
            ->orderBy('id', 'desc')
            ->get();
        $pengangkatan = DB::table('table_pengangkatan')->where('kategori_permohonan')
            ->orderBy('id', 'desc')
            ->get();


        // rumus pembeda

        $data[0] = 'pemberhentian';
        $data[1] = 'pengangkatan';

        // untuk ngecek udah ngirim permohonan atau belum
        $cek['user'] = Auth::user()->status_kirim_permohonan;
        $cek_data = array(
            "pemberhentian" => $pemberhentian,
            "pengangkatan" => $pengangkatan,
        );

        if ($cek['user'] == 'sudah') {
            if ($cek_data["pemberhentian"] == $data[1]) {
                $usulan = ModelsUsulanSaya2::all();
                return view('layouts.tema.usulan.usulanview', compact('usulan'));
            } else {
                $usulan = ModelsUsulanSaya::all();
                return view('layouts.tema.usulan.usulanview', compact('usulan'));
            }
        } else if ($cek['user'] == 'belum') {
            return view('layouts.tema.usulan.usulanviewKosong');
        }
    }
}
