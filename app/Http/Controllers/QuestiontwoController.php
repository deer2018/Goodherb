<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestiontwoController extends Controller
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
        $Q = Questiontwo::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q2.volunteer_questionnaire_sub1_2', compact('id','Q'));
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
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกัน 
        $requestData["total"] = $requestData["ep1_1"] + $requestData["ep1_2"] + $requestData["ep1_3"] +
        $requestData["ep1_4"] + $requestData["ep1_5"] + $requestData["ep1_6"] + $requestData["ep1_7"] + 
        $requestData["ep1_8"] + $requestData["ep1_9"] + $requestData["ep1_10"] + $requestData["ep1_11"] +
        $requestData["ep1_12"] + $requestData["ep1_13"];
        
        //Questiontwo::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $Q = Questiontwo::firstOrNew(array('user_id' => $user_id));
        $Q->fill($requestData)->save();

        return redirect('Q2-2')->with('flash_message', 'Questiontwo added!');
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

        $Questiontwo = Questiontwo::findOrFail($id);
        $Questiontwo->update($requestData);

        return redirect('Questiontwo')->with('flash_message', 'Questiontwo updated!');
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
