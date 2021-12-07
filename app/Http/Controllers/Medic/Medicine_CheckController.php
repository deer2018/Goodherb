<?php

namespace App\Http\Controllers\Medic;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Models\Questiontree;
use App\Models\Questiontree_two;
use Illuminate\Http\Request;



class Medicine_CheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }


    //เช็คการใช้ยาครั้งที่ 1
    public function medicine1($id,Request $request)
    {
        //ค้นหาตาม pk
        $users = User::findOrFail($id);
        
         //ค้นหา column ไหนก็ได้   
        $_qt_3 = Questiontree::where('user_id', '=', $users->id)->first();
    

       
        return view('medic.medic_volunteer.verify.quest1_check_medicine', compact('_qt_3', 'users'));
    }

    //เช็คการใช้ยาครั้งที่ 2
    public function medicine2($id,Request $request)
    {
        //ค้นหาตาม pk
        $users = User::findOrFail($id);
        
         //ค้นหา column ไหนก็ได้   
        $_qt_3 = Questiontree_two::where('user_id', '=', $users->id)->first();
    

        
        return view('medic.medic_volunteer.verify.quest2_check_medicine', compact('_qt_3', 'users'));
    }

  

}
