<?php

namespace App\Http\Controllers\API;
namespace App\Http\Controllers\Volunteer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Tambon;
use Illuminate\Http\Request;

class volunteer_perController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $id = Auth::id();
            $data = User::findOrFail($id);
    
            return view('/volunteer/volunteer_index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $requestData = $request->all();
        
        User::create($requestData);

        return redirect('User')->with('flash_message', 'User added!');
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
         if (Auth::id()  == $id){

            $User = User::findOrFail($id);

            return view('volunteer.volunteer_personal.volunteer_personal', compact('User'));

         }else
         return view('404');
        
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
        
        $User = User::findOrFail($id);
        $User->update($requestData);

        return redirect('volunteer_per')->with('flash_message', 'volunteer_per updated!');
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

    public function getProvinces()
    {
        $provinces = Tambon::groupBy('province_code')->get();
        return $provinces;
    }
    public function getAmphoes($province)
    {
        $amphoes = Tambon::where('province',$province)
            ->groupBy('amphoe_code')
            ->get();
        return $amphoes;
    }
    public function getTambons($province,$amphoe)
    {
        $tambons = Tambon::where('province',$province)
            ->where('amphoe',$amphoe)
            ->groupBy('tambon_code')
            ->get();
        return $tambons;
    }
    public function getZipcodes($province,$amphoe,$tambon)
    {
        $zipcodes = Tambon::where('province',$province)
            ->where('amphoe',$amphoe)        
            ->where('tambon',$tambon)
            ->get();
        return $zipcodes;
    }

}
