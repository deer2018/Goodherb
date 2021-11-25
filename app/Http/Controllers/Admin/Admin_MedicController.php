<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class Admin_MedicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:แอดมิน');
    }

    public function index(Request $request)
    {
        $perPage = 25;
        // $users = User::all();
        $keyword = $request->get('search'); 
        switch(Auth::user()->role)
        {
                case "แอดมิน" : 
                    $users = User::Where('role', '=', "หมอ")
                    ->latest()->paginate($perPage);
    
                    if (!empty($keyword)) {
                        $users = User::Where('role', '=', "หมอ")
                        ->where('name', 'LIKE' , "%$keyword%")
                        ->latest()->paginate($perPage);
                    } else {
                        $users = User::where('role', "หมอ")
                        ->orwhere('role', "หมอ")
                        ->latest()->paginate($perPage);
                    }
                    break;
            default : 
                //means guest
                $users = User::where('id',Auth::id() )->latest()->paginate($perPage);      
        }  
        
        return view('admin.admin_medic.admin_medic_index', compact('users'));

    }
    
    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

};
