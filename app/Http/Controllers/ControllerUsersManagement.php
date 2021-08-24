<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsUsersManagement;
use Illuminate\Support\Facades\Hash;

use App\Models\Pemberhentian;
use App\Models\Pengangkatan;
use Illuminate\Support\Facades\Auth;

class ControllerUsersManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $query_users = ModelsUsersManagement::all();
        return view('layouts.tema.dashboard.view_users_management', compact('query_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // nampilin form user management
    public function create()
    {
        return view('layouts.tema.dashboard.view_create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'max' => 'maksimal 128 karakter ',
            'min' => 'maksimal 4 karakter ',
            'same' => 'password tidak sama ',
            'unique' => 'email yang anda masukan sudah ada di sistem harap email lain ',
        ];
        $request->validate([
            'nama' => 'required|max:128|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|max:128|min:4',
            'konfir-password' => 'required|same:password|max:128|min:4',
        ], $kostum);

        ModelsUsersManagement::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/admin/users-management')->with('sukses', 'Data User Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsUsersManagement $edit)
    {
        return view('layouts.tema.dashboard.view_edit_users', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsUsersManagement $modifData)
    {
        $kostum = [
            'required' => ':attribute jangan di kosongkan',
            'max' => 'maksimal 128 karakter ',
            'min' => 'maksimal 4 karakter ',
            'same' => 'password tidak sama ',
        ];
        $request->validate([
            'nama' => 'required|max:128|min:4',
            'email' => 'required',
            'password' => 'required|max:128|min:4',
            'konfir-password' => 'required|same:password|max:128|min:4',
        ], $kostum);

        ModelsUsersManagement::where('id', $modifData->id)
            ->update([
                'name' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]);

        return redirect('/admin/users-management')->with('sukses', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsUsersManagement $hapusData, Pemberhentian $pemberhentian, Pengangkatan $pengangkatan)
    {
        ModelsUsersManagement::destroy($hapusData->id);
        return redirect('/admin/users-management')->with('sukses', 'Data User Berhasil Di Hapus');
    }
}
