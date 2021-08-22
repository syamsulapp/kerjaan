<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
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
    public function usulan(ModelsUsulanSaya $usulan, ModelsUsulanSaya2 $usulan2)
    {

        // untuk ngecek udah ngirim permohonan atau belum
        $cek['user'] = Auth::user()->status_kirim_permohonan;

        $data = array(
            'pemberhentian' => Auth::user()->kategori_permohonan,
            'pengangkatan' => Auth::user()->kategori_permohonan
        );

        if ($cek['user'] == 'sudah') {
            if ($data['pemberhentian'] == 'pemberhentian') {
                $usulan = $usulan2->all();
                return view('layouts.tema.usulan.usulanview', compact('usulan'));
            } else if ($data['pengangkatan'] == 'pengangkatan') {
                $usulan = $usulan->all();
                return view('layouts.tema.usulan.usulanview', compact('usulan'));
            }
            /** secara default belum krim permohonan maka datanya kosong */
        } else if ($cek['user'] == 'belum') {
            return view('layouts.tema.usulan.usulanviewKosong');
        }
    }

    public function serah_terima(ModelsUsulanSaya $usulan, ModelsUsulanSaya2 $usulan2) {
        $cetak = array(
            'pemberhentian' => Auth::user()->kategori_permohonan,
            'pengangkatan' => Auth::user()->kategori_permohonan,
        );
        if ($cetak['pemberhentian'] == 'pemberhentian') {
            $cetak = $usulan2->all();
            $tampilan = \View::make('layouts.tema.usulan.cetakusulanview',compact('cetak'));
        } else if ($cetak['pengangkatan']  == 'pengangkatan') {
            $cetak = $usulan->all();
            $tampilan = \View::make('layouts.tema.usulan.cetakusulanview',compact('cetak'));
        }

        // logic TCPDF
        $print = $tampilan->render();

        PDF::SetTitle('Serah Terima');
        PDF::AddPage();
        PDF::writeHTML($print, true, false, true, false, '');

        PDF::Output(uniqid().'_Serah Terima.pdf', 'I');
    }
}
