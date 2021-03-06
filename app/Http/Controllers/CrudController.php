<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
   
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $crud = Crud::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $crud = Crud::latest()->paginate($perPage);
        }

        return view('crud.index', compact('crud'));
    }
    

   
    public function create()
    {
        return view('crud.create');
    }

  
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Crud::create($requestData);

        return redirect('crud')->with('flash_message', 'Crud added!');
    }

  
    public function show($id)
    {
        $crud = Crud::findOrFail($id);

        return view('crud.show', compact('crud'));
    }

    
    public function edit($id)
    {
        $crud = Crud::findOrFail($id);

        return view('crud.edit', compact('crud'));
    }

   
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $crud = Crud::findOrFail($id);
        $crud->update($requestData);

        return redirect('crud')->with('flash_message', 'Crud updated!');
    }

    public function destroy($id)
    {
        Crud::destroy($id);

        return redirect('crud')->with('flash_message', 'Crud deleted!');
    }
}
