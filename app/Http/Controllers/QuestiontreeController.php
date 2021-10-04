<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestiontreeController extends Controller
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
        //$Q = Questiontree::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q3.volunteer_questionnaire_sub1_3', compact('id'));
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
        
        //Questiontree::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $Q = Questiontree::firstOrNew(array('user_id' => $user_id));
        $Q->fill($requestData)->save();

        return redirect('volunteer_questionnaire')->with('flash_message', 'Questiontree added!');
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

        $Questiontree = Questiontree::findOrFail($id);
        $Questiontree->update($requestData);

        return redirect('Questiontree')->with('flash_message', 'Questiontree updated!');
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
