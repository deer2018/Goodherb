<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }
  
    public function index()
    {
        $perPage = 7;

        $id = Auth::id();
        $medicines = Medicine::latest()->paginate($perPage);

        return view('medic.medic_volunteer.medicine.medicine_index', compact('medicines'));
    }

 
    public function create()
    {
        return view('medic.medic_volunteer.medicine.medicine_create');
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
        
        Medicine::create($requestData);

        return redirect('medicine')->with('flash_message', 'Medicine added!');
    }

 
    public function show(Medicine $medicine)
    {
        //
    }

    
    public function edit($id)
    {
        $medicines = Medicine::findOrFail($id);

        return view('medic.medic_volunteer.medicine.medicine_edit', compact('medicines'));
    }

   
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $medicines = Medicine::findOrFail($id);
        $medicines->update($requestData);

        return redirect('medicine')->with('flash_message', 'Medicine updated!');
    }

   
    public function destroy($id)
    {
        Medicine::destroy($id);

        return redirect('medicine')->with('flash_message', 'Medicine deleted!');
    }
}