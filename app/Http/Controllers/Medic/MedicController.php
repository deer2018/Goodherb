<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:medic');
    }

    public function index()
    {
        return view('medic_index');
    }
}
