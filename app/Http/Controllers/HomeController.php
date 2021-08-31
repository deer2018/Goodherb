<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role == "admin"){
            return redirect("admin_index");

    }else if(Auth::user()->role == "volunteer_personal"){
            return redirect("volunteer_personal");

    }else if(Auth::user()->role == "medic"){
        return redirect("medic_index");
}
    return view("home");
    
    }
}
