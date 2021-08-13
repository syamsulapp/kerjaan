<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class Administrator extends Controller {

    public function __construct()
    {
        // jalnanin session
        $this->middleware('auth');
    }

    public function index() {
        return view('layouts.tema.dashboard.admin');
    }

    public function data(Request $request) {
        
    }



}