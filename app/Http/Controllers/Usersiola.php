<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Usersiola extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form(Request $request) {

        $data = [
            'key1' => $request->input1,
            'key2' => $request->input2,
        ];
        
        return view('layouts.tema.dashboard.dashboard',compact('data'));

    }

    public function insert_form(Request $request) {
    
    }
}