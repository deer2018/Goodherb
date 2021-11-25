<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class Admin_VolunteerController extends Controller
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
                    $users = User::Where('role', '=', "อาสาสมัคร")
                    ->latest()->paginate($perPage);
    
                    if (!empty($keyword)) {
                            $users = User::Where('role', '=', "อาสาสมัคร")
                            ->where('name', 'LIKE' , "%$keyword%")
                            // ->where('name', 'LIKE' , "%$keyword%")
                            // ->orwhere('role', '!=' , "อาสาสมัคร")
                            // ->orWhere('email', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
                    } else {
                        $users = User::where('role', "อาสาสมัคร")
                        ->orwhere('role', "อาสาสมัคร")
                        ->latest()->paginate($perPage);
                    }
                    break;
            default : 
                //means guest
                $users = User::where('id',Auth::id() )->latest()->paginate($perPage);      
        }  
        
        return view('admin.admin_volunteer.admin_volunteer_index', compact('users'));

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
     
        $users = User::findOrFail($id);

        return view('admin.admin_volunteer.volunteer_show', compact('users'));
        
    }

   
    public function edit($id)
    {
            $users = User::findOrFail($id);
            return view('admin.admin_volunteer.volunteer_edit', compact('users'));
    
    }

   
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $users = User::findOrFail($id);
        $users->update($requestData);

        return redirect('admin_volunteer')->with('flash_message', 'Crud updated!');
    }

   
    public function destroy($id)
    {
        //
    }



    

}
