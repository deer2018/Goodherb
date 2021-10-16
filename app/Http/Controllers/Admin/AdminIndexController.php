<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:แอดมิน');
    }

    public function index()
    {
        return view('admin.admin_index');
    }
};
   