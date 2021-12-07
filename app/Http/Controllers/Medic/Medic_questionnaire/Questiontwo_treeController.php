<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontwo_tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questiontwo_treeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $_qt2_3 = Questiontwo_tree::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q2.volunteer_questionnaire_sub3_2', compact('id','Q'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;
        
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกัน 
        $requestData["total"] = $requestData["ep3_1"] + $requestData["ep3_2"] + $requestData["ep3_3"] +
        $requestData["ep3_4"] + $requestData["ep3_5"] + $requestData["ep3_6"] + $requestData["ep3_7"] + 
        $requestData["ep3_8"] + $requestData["ep3_9"] + $requestData["ep3_10"] + $requestData["ep3_11"] +
        $requestData["ep3_12"] + $requestData["ep3_13"] + $requestData["ep3_14"] + $requestData["ep3_15"] + 
        $requestData["ep3_16"] + $requestData["ep3_17"] + $requestData["ep3_18"] + $requestData["ep3_19"] + 
        $requestData["ep3_20"] + $requestData["ep3_21"] + $requestData["ep3_22"] + $requestData["ep3_23"] + 
        $requestData["ep3_24"] + $requestData["ep3_25"] + $requestData["ep3_26"];
        // คำนวนกลุ่ม
        $requestData["group"] = rand(13,26);
        echo "<h1> Your Score: {$requestData["total"]}/26 </h1>"; 
        if($requestData["total"]<61){
            echo $requestData["group"] = 'ไม่ดี';
        }else if($requestData["total"]<96){
            echo $requestData["group"] = 'ปานกลาง';
        }else if($requestData["total"]>95){
            echo $requestData["group"] = 'ดี';
        }
        
        //Questiontwo_tree::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt2_3 = Questiontwo_tree::firstOrNew(array('user_id' => $user_id));
        $_qt2_3->fill($requestData)->save();

        return redirect('volunteer_question')->with('flash_message', 'Questiontwo_tree added!');
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
        $requestData = $request->all();

        $Questiontwo_tree = Questiontwo_tree::findOrFail($id);
        $Questiontwo_tree->update($requestData);

        return redirect('Questiontwo_tree')->with('flash_message', 'Questiontwo_tree updated!');
    }

    
    public function destroy($id)
    {
        //
    }
}
