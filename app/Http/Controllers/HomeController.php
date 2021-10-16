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
        if(Auth::user()->role == "แอดมิน"){
            return redirect("admin_index");

    }else if(Auth::user()->role == "อาสาสมัคร"){
            return redirect("volunteer_per");

    }else if(Auth::user()->role == "หมอ"){
        return redirect("medic_volunteer");
}
    return view("home");
    
    }
}
