<?php

namespace App\Http\Controllers\Volunteer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Medicine;
use App\Models\Medic_Emotion;
use App\Models\Questionone_four;

class volunteer_conController extends Controller
{
    public function index()
    {
        //id ของอสม.
        $id = Auth::id();
        $users = User::findOrFail($id);
        $qt = Questionone_four::where('user_id',$id)->first();
        $me = Medic_Emotion::where('user_id',$id)->first();
        $md = Medicine::where('user_id',$id)->first();

        return view('volunteer.volunteer_conclusion.volunteer_conclusion', compact('users', 'qt', 'me', 'md'));
    }
}
