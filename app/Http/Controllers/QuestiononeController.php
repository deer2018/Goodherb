<?php

namespace App\Http\Controllers;
use App\Http\Requests;

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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub1');
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
        
        Crud::create($requestData);

        return redirect('crud')->with('flash_message', 'Crud added!');
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
    public function edit()
    {

        // if (Auth::id()  == $id){

        //     $data = Questionone::findOrFail($id);

            return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub2');
            // compact('data')

        //  }else
        //  return view('404');
    }
    public function editeIII()
    {
        // if (Auth::id()  == $id){

        //     $data = Questionone::findOrFail($id);

        //     return view('volunteer.volunteer_personal.volunteer_personal', compact('data'));

        //  }else
        //  return view('404');

        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub3');
    }
    public function editteIV()
    {
        // if (Auth::id()  == $id){

        //     $data = Questionone::findOrFail($id);

        //     return view('volunteer.volunteer_personal.volunteer_personal', compact('data'));

        //  }else
        //  return view('404');
        return view('volunteer.volunteer_questionnaire.Q1.volunteer_questionnaire_sub4');
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
        
        $crud = Crud::findOrFail($id);
        $crud->update($requestData);

        return redirect('crud')->with('flash_message', 'Crud updated!');
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
