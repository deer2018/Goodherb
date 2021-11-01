<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Medic_Emotion;
use Illuminate\Http\Request;
class Medic_EmotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }

    public function index()
    {
       

        $id = Auth::id();
        $emotion = Medic_Emotion::latest();

        return view('medic.medic_volunteer.medic_emotion.medic_emotion_index', compact('emotion'));
    }

    public function store_emotion(Request $request)
    {
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();

        $emotion = Medic_Emotion::firstOrNew(array('user_id' => $user_id));
        $emotion->fill($requestData)->save();

        

        return redirect('predicate1/1')->with('flash_message', 'Questionone added!');
    }

}
