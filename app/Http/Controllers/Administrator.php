<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

use App\Models\Pemberhentian;
use App\Models\Pengangkatan;

class Administrator extends Controller
{

    public function __construct()
    {
        // jalnanin session
        $this->middleware('auth');
    }
    // view forms (for admin)
    public function index_pemberhentian()
    {
        $pemberhentian = Pemberhentian::all();
        return view('layouts.tema.dashboard.pemberhentian', compact('pemberhentian'));
    }

    public function index_pengangkatan()
    {
        $pengangkatan = Pengangkatan::all();
        return view('layouts.tema.dashboard.pengangkatan', compact('pengangkatan'));
    }

    // kasih status buat user apakah disetujui berkasnya atau tidak untuk pemberhentian
    public function edit_data_pemberhentian(Pemberhentian $pemberhentian)
    {
        $data_pemberhentian = $pemberhentian;
        return view('layouts.tema.dashboard.edit_pemberhentian', compact('data_pemberhentian'));
    }

    public function edit_data_pengangkatan(Pengangkatan $pengangkatan)
    {
    }

    // kasih status buat user apakah disetujui berkasnya atau tidak untuk pemberhentian
    public function update_data_pemberhentian(Request $request, Pemberhentian $pemberhentian)
    {
    }
    public function update_data_pengangkatan(Request $request, Pemberhentian $pemberhentian)
    {
    }
}
