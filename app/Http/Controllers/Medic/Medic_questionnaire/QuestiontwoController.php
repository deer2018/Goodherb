<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestiontwoController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        // $id = Auth::id();
        // $_qt2_1 = Questiontwo::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q2.volunteer_questionnaire_sub1_2', compact('id','Q'));
    }

    
    public function store(Request $request)
    {
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;
        
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกัน 
        $requestData["total"] = $requestData["ep1_1"] + $requestData["ep1_2"] + $requestData["ep1_3"] +
        $requestData["ep1_4"] + $requestData["ep1_5"] + $requestData["ep1_6"] + $requestData["ep1_7"] + 
        $requestData["ep1_8"] + $requestData["ep1_9"] + $requestData["ep1_10"] + $requestData["ep1_11"] +
        $requestData["ep1_12"] + $requestData["ep1_13"];
        // คำนวนกลุ่ม
        $requestData["group"] = rand(7,13);
        echo "<h1> Your Score: {$requestData["total"]}/13 </h1>"; 
        if($requestData["total"]<4){
            echo $requestData["group"] = 'ต่ำ';
        }else if($requestData["total"]<6){
            echo $requestData["group"] = 'ปานกลาง';
        }else if($requestData["total"]>6){
            echo $requestData["group"] = 'สูง';
        }
        
        //Questiontwo::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt_1 = Questiontwo::firstOrNew(array('user_id' => $user_id));
        $_qt_1->fill($requestData)->save();

        return redirect('Q2-2')->with('flash_message', 'Questiontwo added!');
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

        $Questiontwo = Questiontwo::findOrFail($id);
        $Questiontwo->update($requestData);

        return redirect('Questiontwo')->with('flash_message', 'Questiontwo updated!');
    }

   
    public function destroy($id)
    {
        //
    }
}
