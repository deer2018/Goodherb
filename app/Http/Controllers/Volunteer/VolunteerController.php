<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VounteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:volunteer');
    }

    public function index()
    {
        return view('volunteer_index');
    }
}
