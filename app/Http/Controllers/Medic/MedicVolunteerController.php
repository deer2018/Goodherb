<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Diagnosis;
use App\Models\Questionone;
use App\Models\Questionone_two;
use App\Models\Questionone_tree;
use App\Models\Questionone_four;
use Illuminate\Http\Request;

class MedicVolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }

    public function index()
    {

    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();
        $requestData["user_id"] = $user_id;



         $diagnosis = Diagnosis::firstOrNew(array('user_id' => $user_id));
         $diagnosis->fill($requestData)->save();

    }

  
    public function show(MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    
    public function edit($id)
    {
       //ค้นหาตาม pk
        $users = User::findOrFail($id);
        //ค้นหา column ไหนก็ได้   
        $_qt_1 = Questionone::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_2 = Questionone_two::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_3 = Questionone_tree::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_4 = Questionone_four::where('user_id', '=', $users->id)->firstOrFail();
        return view('medic.medic_volunteer.verify.predicate1', compact('users','_qt_1','_qt_2','_qt_3','_qt_4'));
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
