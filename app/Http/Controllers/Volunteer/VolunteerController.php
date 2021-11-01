<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Questionone;
use App\Models\Questiontwo;
use App\Models\Questiontree;
use App\Models\Questiontree_two;
use Illuminate\Support\Facades\Auth;

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
