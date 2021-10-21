<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontree_two;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questiontree_twoController extends Controller
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
        $Q = Questiontree_two::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q3.volunteer_questionnaire_sub2_3', compact('id','Q'));
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
        
        //Questiontree_two::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $Q = Questiontree_two::firstOrNew(array('user_id' => $user_id));
        $Q->fill($requestData)->save();

        return redirect('volunteer_questionnaire')->with('flash_message', 'Questiontree_two added!');
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

        $Questiontree_two = Questiontree_two::findOrFail($id);
        $Questiontree_two->update($requestData);

        return redirect('Questiontree_two')->with('flash_message', 'Questiontree_two updated!');
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
