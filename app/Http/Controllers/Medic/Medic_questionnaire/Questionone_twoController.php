<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questionone_two;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questionone_twoController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        // แพทย์ไม่ใช้ทำแบบสอบถาม
        // $id = Auth::id();
        // $_qt_2 = Questionone::firstOrNew(array('user_id' => $id));
        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub2', compact('id','Q'));
    }

    
    public function store(Request $request)
    {
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;
        
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกัน 
        $requestData["total"] = $requestData["ep2_1"] + $requestData["ep2_2"] + $requestData["ep2_3"] +
        $requestData["ep2_4"] + $requestData["ep2_5"];
        // คำนวนกลุ่ม
        $requestData["group"] = rand(10,20);
        echo "<h1> Your Score: {$requestData["total"]}/20 </h1>"; 
        if($requestData["total"]<5){
            echo $requestData["group"] = 'เครียดน้อย';
        }else if($requestData["total"]<8){
            echo $requestData["group"] = 'เครียดปานกลาง';
        }else if($requestData["total"]<10){
            echo $requestData["group"] = 'เครียดมาก';
        }else if($requestData["total"]==9){
            echo $requestData["group"] = 'เครียดมาก';
        }else if($requestData["total"]>9){
            echo $requestData["group"] = 'เครียดมากที่สุด';
        }

        // บันทึกลงฐานข้อมูล
        //Questionone_two::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt_2 = Questionone_two::firstOrNew(array('user_id' => $user_id));
        $_qt_2->fill($requestData)->save();

        return redirect('Q1-3')->with('flash_message', 'Questionone_two added!');
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

        $Questionone_two = Questionone_two::findOrFail($id);
        $Questionone_two->update($requestData);

        return redirect('Questionone_two')->with('flash_message', 'Questionone_two updated!');
    }

    
    public function destroy($id)
    {
        //
    }
}
