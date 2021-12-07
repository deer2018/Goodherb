<?php

namespace App\Http\Controllers;

use App\Models\Questionone;
use Illuminate\Http\Request;


class QuestiononeController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        // แพทย์ไม่ใช้ทำแบบสอบถาม
        // $id = Auth::id();
        // $_qt_1 = Questionone::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub1', compact('id','Q'));
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

        //Questionone::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt_1 = Questionone::firstOrNew(array('user_id' => $user_id));
        $_qt_1->fill($requestData)->save();

        return redirect()->back();
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {

        // if (Auth::id()  == $id) {

        //     $data = Questionone::findOrFail($id);

        //     return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub2', compact('data'));
        // } else
        //     return view('404');
    }
    public function editeIII()
    {
        // if (Auth::id()  == $id){

        //     $data = Questionone::findOrFail($id);

        //     return view('volunteer.volunteer_personal.volunteer_personal', compact('data'));

        //  }else
        //  return view('404');

        // return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub3');
    }
    public function editteIV()
    {
        // if (Auth::id()  == $id){

        //     $data = Questionone::findOrFail($id);

        //     return view('volunteer.volunteer_personal.volunteer_personal', compact('data'));

        //  }else
        //  return view('404');
        // return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub4');
    }


    
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $Questionone = Questionone::findOrFail($id);
        $Questionone->update($requestData);

        return redirect('Questionone')->with('flash_message', 'Questionone updated!');
    }

    
    public function destroy($id)
    {
        //
    }
}
