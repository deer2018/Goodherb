<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questiontwo_tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Questiontwo_treeController extends Controller
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

        return view('volunteer.volunteer_questionnaire.Q2.volunteer_questionnaire_sub3_2', compact('id'));
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
        Questiontwo_tree::create($requestData);

        return redirect('Q2-4')->with('flash_message', 'Questiontwo_tree added!');
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

        $Questiontwo_tree = Questiontwo_tree::findOrFail($id);
        $Questiontwo_tree->update($requestData);

        return redirect('Questiontwo_tree')->with('flash_message', 'Questiontwo_tree updated!');
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
