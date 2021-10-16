<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class MedicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }
    
    public function index(Request $request)
    {
        $perPage = 25;
        $users = User::all();
        $keyword = $request->get('search'); 
        switch(Auth::user()->role)
        {
                case "หมอ" : 
                    $users = User::latest()->paginate($perPage);
    
                    if (!empty($keyword)) {
                        $users = User::where(function($q) use ($keyword){
                            $q->where('username', )
                              ->orWhere('surname', $keyword);        
                        })
                        ->get();
                    } else {
                        $users = User::where('role', "อาสาสมัคร")
                        ->latest()->paginate($perPage);
                    }
                    break;
            default : 
                //means guest
                $users = User::where('id',Auth::id() )->latest()->paginate($perPage);      
        }  
        
        return view('medic.medic_volunteer.medic_volunteer', compact('users'));

    }

    public function volunteer_sub(Request $request, $id)
    {
            

       
        $users = User::findOrFail($id);   
          
         return view('medic.medic_volunteer.medic_volunteer_sub', compact('users'));
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

        return view('medic.medic_volunteer.medic_volunteer_show', compact('users'));
    }

    
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('admin.admin_user.edit', compact('users'));
    }

   
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $users = User::findOrFail($id);
        $users->update($requestData);

        return redirect('admin_user')->with('flash_message', 'updated!');
    }

  
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin_user')->with('flash_message', 'deleted!');
    }
}
