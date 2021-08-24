<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pemberhentian;
use App\Models\Pengangkatan;
use Illuminate\Support\Facades\DB;

use App\Models\ModelsDashboard;
use Illuminate\Support\Facades\Auth;

class Administrator extends Controller
{

    public function __construct()
    {
        // jalnanin session
        $this->middleware('auth');
    }

    // admin dashboard

    public function adminDashboard(ModelsDashboard $dash)
    {
        $dashboard = $dash->all();
        return view('layouts.tema.dashboard.admindash', compact('dashboard'));
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
        $data_pengangkatan = $pengangkatan;
        return view('layouts.tema.dashboard.edit_pengangkatan', compact('data_pengangkatan'));
    }

    // kasih status buat user apakah disetujui berkasnya atau tidak untuk pemberhentian
    public function update_data_pemberhentian(Request $request, Pemberhentian $pemberhentian)
    {

        DB::table('table_pemberhentian')
            ->where('id', $request->id)
            ->update(['status_permohonan' => $request->kirim_status]);

        DB::table('table_pemberhentian')
        ->where('id', $request->id)
        ->update(['keterangan' => $request->kirim_alasan]);

        return redirect('/admin/pemberhentian')->with(['sukses' => 'anda sdh mengirim status ke user yang bersangkutan']);
    }
    public function update_data_pengangkatan(Request $request, Pemberhentian $pemberhentian)
    {
        DB::table('table_pengangkatan')
            ->where('id', $request->id)
            ->update(['status_permohonan' => $request->kirim_status]);

        DB::table('table_pengangkatan')
            ->where('id', $request->id)
            ->update(['keterangan' => $request->kirim_alasan]);

        return redirect('/admin/pengangkatan')->with(['sukses' => 'anda sdh mengirim status ke user yang bersangkutan']);
    }

    public function hapus_data_pemberhentian(Pemberhentian $hapusDataPemberhentian) {
        Pemberhentian::destroy($hapusDataPemberhentian->id);
        
        // hapus data user untuk dan suruh ulangi upload (pemberhentian)
        DB::table('users')
        ->where('noreg', $hapusDataPemberhentian->noreg)
        ->update(['status_kirim_permohonan' => 'belum']);
        
        // hapus data user untuk dan suruh ulangi upload (pemberhentian)
        DB::table('users')
        ->where('noreg', $hapusDataPemberhentian->noreg)
        ->update(['kategori_permohonan' => 'default']);
        
        return redirect('/admin/pemberhentian')->with('sukses','data berhasil di hapus');
    }
    
    public function hapus_data_pengangkatan(Pengangkatan $hapusDataPengangkatan) {
        Pengangkatan::destroy($hapusDataPengangkatan->id);
        
        // hapus data user untuk dan suruh ulangi upload (pengangkatan)
        DB::table('users')
        ->where('noreg', $hapusDataPengangkatan->noreg)
        ->update(['status_kirim_permohonan' => 'belum']);
        
        // hapus data user untuk dan suruh ulangi upload (pengangkatan)
        DB::table('users')
        ->where('noreg', $hapusDataPengangkatan->noreg)
        ->update(['kategori_permohonan' => 'default']);

        return redirect('/admin/pengangkatan')->with('sukses','data berhasil di hapus');
    }
}
