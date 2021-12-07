<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestiontreeController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $id = Auth::id();
        $_qt_3 = Questiontree::firstOrNew(array('user_id' => $id));

        return view('volunteer.volunteer_questionnaire.Q3.volunteer_questionnaire_sub1_3', compact('id','Q'));
    }

   
    public function store(Request $request)
    {
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;
        
        
        //Questiontree::create($requestData);
        // ค้นข้อมูลก่อนว่ามีมั้ยแล้วค่อยบันทึก
        $_qt_3 = Questiontree::firstOrNew(array('user_id' => $user_id));
        $_qt_3->fill($requestData)->save();

        return redirect('volunteer_question')->with('flash_message', 'Questiontree added!');
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

        $Questiontree = Questiontree::findOrFail($id);
        $Questiontree->update($requestData);

        return redirect('Questiontree')->with('flash_message', 'Questiontree updated!');
    }

  
    public function destroy($id)
    {
        //
    }
}
