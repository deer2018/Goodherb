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
        $id = Auth::id();

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub4', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกกัน 
        $requestData["total"] = $requestData["ep4_1"] + $requestData["ep4_2"] + $requestData["ep4_3"] +
        $requestData["ep4_4"] + $requestData["ep4_5"] + $requestData["ep4_6"] + $requestData["ep4_7"] + 
        $requestData["ep4_8"] + $requestData["ep4_9"] + $requestData["ep4_10"];
        // คำนวนกลุ่ม
        $requestData["group"] = rand(10,20);
        echo "<h1> Your Score: {$requestData["total"]}/20 </h1>"; 
        if($requestData["total"]<6){
            echo $requestData["group"] = 'D';
        }else if($requestData["total"]<11){
            echo $requestData["group"] = 'C';
        }else if($requestData["total"]<16){
            echo $requestData["group"] = 'B';
        }else if($requestData["total"]==11){
            echo $requestData["group"] = 'B';
        }else if($requestData["total"]>15){
            echo $requestData["group"] = 'A';
        }
        Questionone_four::create($requestData);

        return redirect('volunteer_questionnaire')->with('flash_message', 'Questionone_four added!');
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
