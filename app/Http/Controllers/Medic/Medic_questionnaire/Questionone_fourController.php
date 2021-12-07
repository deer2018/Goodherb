<?php

namespace App\Http\Controllers;

use App\Models\Questionone_four;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questionone_fourController extends Controller
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
        // แพทย์ไม่ใช้ทำแบบสอบถาม
        // $id = Auth::id();
        // $_qt_4 = Questionone::firstOrNew(array('user_id' => $id));
        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub4', compact('id','Q'));
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
        
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกกัน 
        $requestData["total"] = $requestData["ep4_1"] + $requestData["ep4_2"] + $requestData["ep4_3"] +
        $requestData["ep4_4"] + $requestData["ep4_5"] + $requestData["ep4_6"] + $requestData["ep4_7"] + 
        $requestData["ep4_8"] + $requestData["ep4_9"] + $requestData["ep4_10"];
        // คำนวนกลุ่ม
        $requestData["group"] = rand(10,20);
        echo "<h1> Your Score: {$requestData["total"]}/20 </h1>"; 
        if($requestData["total"]<5){
            echo $requestData["group"] = 'พึ่งพาโดยสมบูรณ์';
        }else if($requestData["total"]<9){
            echo $requestData["group"] = 'พึ่งพารุนแรง ';
        }else if($requestData["total"]<12){
            echo $requestData["group"] = 'พึ่งพาปานกลาง ';
        }else if($requestData["total"]==9){
            echo $requestData["group"] = 'พึ่งพาปานกลาง ';
        }else if($requestData["total"]>11){
            echo $requestData["group"] = 'ไม่เป็นภาระ';
        }
        // บันทึกลงฐานข้อมูล
        //Questionone_four::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt_4 = Questionone_four::firstOrNew(array('user_id' => $user_id));
        $_qt_4->fill($requestData)->save();

        return redirect('volunteer_question')->with('flash_message', 'Questionone_four added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $Questionone_four = Questionone_four::findOrFail($id);
        $Questionone_four->update($requestData);

        return redirect('Questionone_four')->with('flash_message', 'Questionone_four updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
