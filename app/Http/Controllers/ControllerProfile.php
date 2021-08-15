<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ControllerProfile extends Controller
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
    public function view_profile()
    {
        return view('layouts.tema.dashboard.view_profile');
    }
}
