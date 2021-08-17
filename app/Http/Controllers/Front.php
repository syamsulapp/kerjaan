<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemberhentian;
use App\Models\Pengangkatan;

class Front extends Controller
{

    public function about(Pemberhentian $berhenti, Pengangkatan $angkat)
    {
        $hitung_data = array(
            'pemberhentian' => count(array($berhenti)),
            'pengangkatan' => count(array($angkat))
        );
        return view('layouts.tema.depan.about', compact('hitung_data'));
    }

    /** menu selanjutnya kalo ada  */
    public function kontak()
    {
    }
}
