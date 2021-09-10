<?php

namespace App\Http\Controllers;

use App\Models\Questionone_tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questionone_treeController extends Controller
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

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub3', compact('id'));
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
        $requestData["total"] = $requestData["ep3_1"] + $requestData["ep3_2"] + $requestData["ep3_3"] +
        $requestData["ep3_4"] + $requestData["ep3_5"] + $requestData["ep3_6"] + $requestData["ep3_7"] + 
        $requestData["ep3_8"] + $requestData["ep3_9"] + $requestData["ep3_10"] + $requestData["ep3_11"] +
        $requestData["ep3_12"] + $requestData["ep3_13"] + $requestData["ep3_14"] + $requestData["ep3_15"] + 
        $requestData["ep3_16"] + $requestData["ep3_17"] + $requestData["ep3_18"] + $requestData["ep3_19"] + 
        $requestData["ep3_20"] + $requestData["ep3_21"] + $requestData["ep3_22"] + $requestData["ep3_23"] + 
        $requestData["ep3_24"] + $requestData["ep3_25"] + $requestData["ep3_26"];
        Questionone_tree::create($requestData);

        return redirect('Q1-4')->with('flash_message', 'Questionone_tree added!');
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

        $Questionone_tree = Questionone_tree::findOrFail($id);
        $Questionone_tree->update($requestData);

        return redirect('Questionone_tree')->with('flash_message', 'Questionone_tree updated!');
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