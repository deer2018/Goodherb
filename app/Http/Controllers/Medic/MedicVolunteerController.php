<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class MedicVolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:medic');
    }

    public function index()
    {
        $id = Auth::id();
        $data = _q1_1::findOrFail($id);  


    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show(MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    
    public function edit($id)
    {
       
        $users = User::findOrFail($id);   
        $user_id = User::findOrFail($id);  
        return view('medic.medic_volunteer.verify.predicate1', compact('users'));
    }

    public function edit2($id)
    {
       
        $users = User::findOrFail($id);   
        $user_id = User::findOrFail($id);  
        return view('medic.medic_volunteer.verify.predicate2', compact('users'));
    }

  
    public function update(Request $request, MedicVolunteerController $medicVolunteerController)
    {
        //
    }

  
    public function destroy(MedicVolunteerController $medicVolunteerController)
    {
        //
    }
}
