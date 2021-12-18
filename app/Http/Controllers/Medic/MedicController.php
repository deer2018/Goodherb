<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Models\Diagnosis;
use App\Models\Diagnosis2;
use App\Models\Questiontwo_tree;
use App\Models\Questiontree;
use App\Models\Questiontree_two;
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
        // $users = User::all();
        $keyword = $request->get('search');
        switch (Auth::user()->role) {
            case "หมอ":
                // $users = User::latest()->paginate($perPage);
                if (!empty($keyword)) {
                    $users = User::Where('role', '=', "อาสาสมัคร")
                        ->where('name', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
                    // $users = User::join('_q1_4', 'users.id', '=', '_q1_4.user_id')
                    // ->leftJoin('diagnosis', 'users.id', '=', 'diagnosis.user_id')
                    // ->where('role', "อาสาสมัคร")
                    // ->where('name', 'LIKE' , "%$keyword%")
                    // ->select('users.*', '_q1_4.group', 'diagnosis.advice')
                    // ->latest()->paginate($perPage);
                } else {

                    //เชื่อมตาราง _q1_4 , diagnosis , diagnosis2 เข้ากับตาราง User
                    $users = User::join('_q1_4', 'users.id', '=', '_q1_4.user_id')
                        ->leftJoin('diagnosis', 'users.id', '=', 'diagnosis.user_id')
                        ->leftJoin('diagnosis2', 'users.id', '=', 'diagnosis2.user_id')
                        ->where('role', "อาสาสมัคร")
                        ->select('users.*', '_q1_4.group', 'diagnosis.advice', 'diagnosis2.advice2')
                        ->orderBy('status', 'DESC')
                        ->latest()->paginate($perPage);
               
                    
                    //เช็คไอดีและอัพเดทสเตตัส
                    // $status = "";
                    // foreach ($users as $item) {
                    //     if (!empty($item->advice2)) {
                    //         $item->status = 'ตรวจสอบครั้งที่ 2 แล้ว';
                    //     }
                    //     // else {
                    //     //     $status[$item['id']] = 0;
                    //     // }
                    // }
                    
                     
                }
                break;
            default:
                //means guest
                $users = User::where('id', Auth::id())->latest()->paginate($perPage);
        }

        return view('medic.medic_volunteer.medic_volunteer', compact('users'));
    }

    public function volunteer_sub(Request $request, $id)
    {



        $users = User::findOrFail($id);
       
        $user_id = $users->id;

        $tm1 = Questiontwo_tree::where('user_id'  ,$user_id )->get();
        $update_1 = "";
        foreach($tm1 as $item){
            if(!empty( $item->group )){
                $update_1 = 1 ;
            }
        }

        $tm3 = Questiontree::where('user_id'  ,$user_id )->get();
        $update_3 = "";
        foreach($tm3 as $item){
            if(!empty( $item->updated_at )){
                $update_3 = 3 ;
            }
        }

        $tm4 = Questiontree_two::where('user_id'  ,$user_id )->get();
        $update_4 = "";
        foreach($tm4 as $item){
            if(!empty( $item->updated_at )){
                $update_4 = 4 ;
            }
        }


        return view('medic.medic_volunteer.medic_volunteer_sub', compact('users','update_1','update_3','update_4'));
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
