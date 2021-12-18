<?php

namespace App\Http\Controllers\Volunteer;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Diagnosis;
use App\Models\Diagnosis2;
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
        $me = Diagnosis::where('user_id',$id)->first();
        $me2 = Diagnosis2::where('user_id',$id)->first();
        $md = Medic_Emotion::leftJoin('emotion_t','medic_emotion.emotion','=','emotion_t.id')
        ->select('emotion_t.*','emotion_t.emotion_name')
        ->where('user_id', '=', $users->id)
        ->first();

        return view('volunteer.volunteer_conclusion.volunteer_conclusion', compact('users', 'qt', 'me', 'me2', 'md'));
    }
}

