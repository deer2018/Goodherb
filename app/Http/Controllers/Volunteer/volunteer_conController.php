<?php

namespace App\Http\Controllers\Volunteer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Medicine;
use App\Models\Medic_Emotion;
use App\Models\Questionone_four;

use App\Models\Questionone;
use App\Models\Questiontwo;
use App\Models\Questiontree;
use App\Models\Questiontree_two;

class volunteer_conController extends Controller
{
    public function index()
    {
        {
            $id = Auth::id();
            $users = User::findOrFail($id);
            $me = Medic_Emotion::findOrFail($id);
            $qt = Questionone_four::findOrFail($id);
            $md = Medicine::findOrFail($id);
    
            return view('volunteer.volunteer_conclusion.volunteer_conclusion', compact('users','me','md','qt'));
        }
    }
    public function volunteer_questionnaire()
    {
        {
            $id = Auth::id();
            $users = User::findOrFail($id);
            $tm1 = Questionone::findOrFail($id);
            $tm2 = Questiontwo::findOrFail($id);
            $tm3 = Questiontree::findOrFail($id);
            $tm4 = Questiontree_two::findOrFail($id);
    
            return view('volunteer.volunteer_questionnaire', compact('users','tm1','tm2','tm3','tm4'));
        }
    }
}