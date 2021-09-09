<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questionone_two;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questionone_twoController extends Controller
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

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub2', compact('id'));
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
        // เอาคะแนนของทุกๆ คอลัมน์มาบวกัน 
        $requestData["total"] = $requestData["ep2_1"] + $requestData["ep2_2"] + $requestData["ep2_3"] +
        $requestData["ep2_4"] + $requestData["ep2_5"];
        Questionone_two::create($requestData);

        return redirect('Q1-3')->with('flash_message', 'Questionone_two added!');
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

        $Questionone_two = Questionone_two::findOrFail($id);
        $Questionone_two->update($requestData);

        return redirect('Questionone_two')->with('flash_message', 'Questionone_two updated!');
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
