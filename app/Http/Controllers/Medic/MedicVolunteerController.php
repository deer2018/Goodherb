<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use Illuminate\Http\Request;

class MedicVolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:medic');
    }

    public function index()
    {
         $users = User::all();
         
         return view('medic.medic_volunteer.verify.predicate1', compact('users'));
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicVolunteerController  $medicVolunteerController
     * @return \Illuminate\Http\Response
     */
    public function show(MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicVolunteerController  $medicVolunteerController
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicVolunteerController  $medicVolunteerController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicVolunteerController  $medicVolunteerController
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicVolunteerController $medicVolunteerController)
    {
        //
    }
}