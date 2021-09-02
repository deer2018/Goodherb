<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Models\Questionone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestiononeController extends Controller
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

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub1', compact('id'));
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
        Questionone::create($requestData);

        return redirect('Q1-2')->with('flash_message', 'Questionone added!');
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

        $Questionone = Questionone::findOrFail($id);
        $Questionone->update($requestData);

        return redirect('Questionone')->with('flash_message', 'Questionone updated!');
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
