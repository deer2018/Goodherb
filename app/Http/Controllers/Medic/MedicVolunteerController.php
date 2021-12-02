<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Diagnosis;
use App\Models\Emotion_t;
use App\Models\Medic_Emotion;
use App\Models\Medicine;
use App\Models\Questionone;
use App\Models\Questionone_two;
use App\Models\Questionone_tree;
use App\Models\Questionone_four;
use Illuminate\Http\Request;

class MedicVolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:หมอ');
    }

    public function index()
    {

    }

   
    public function create()
    {
        //
    }

   
    public function store_advice($id ,Request $request)
    
    { 
        //รับค่าไอดีจาก user
        $auth = User::findorfail($id);
        
            
            $requestData = $request->all();
            $user_id = Auth::id();
            $requestData["user_id"] = $user_id;
            $requestData["user_id"] = Auth::id();
       

            $diagnosis = Diagnosis::firstOrNew(array('user_id' => $user_id));
            $diagnosis->fill($requestData)->save();

            return redirect()->route('predicate1', [$auth]);

    }

    public function store_emotion(Request $request)
    {
      
        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();

        $emotions = Medic_Emotion::firstOrNew(array('user_id' => $user_id));
        $emotions->fill($requestData)->save();

        // $emotions = Medic_Emotion::join('emotion_t','medic_emotion.id','=','emotion_t.id')
        // ->select('emotion_t.name','=','medic_emotion.emotion');
        // $emotions = DB::table('medic_emotion')
        //     ->select('emotion')
        //     ->join('emotion_t', 'medic_emotion.id', '=', 'emotion_t.id')
        //     ->where('emotion_t.emotion_name', $requestData)
        //     ->get();
    
        return redirect()->back();
       
    }

    public function store_medicine(Request $request)
    {
      


        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = Auth::id();
        $requestData["user_id"] = $user_id;
        $requestData["user_id"] = Auth::id();
        
        Medicine::create($requestData);

        return redirect()->back();
      
    }
  
    public function show(MedicVolunteerController $medicVolunteerController)
    {
        //
    }

    
    public function edit($id , Request $request)
    {
        //แบ่งหน้ารายการ
        $perPage = 10;
        
       //ค้นหาตาม pk
        $users = User::findOrFail($id);
       
        //ค้นหา column ไหนก็ได้   
        $_qt_1 = Questionone::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_2 = Questionone_two::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_3 = Questionone_tree::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_4 = Questionone_four::where('user_id', '=', $users->id)->firstOrFail();

        $medicines = Medicine::latest()->paginate($perPage);
        $advice = Diagnosis::latest()->first();
        $emotion = Medic_Emotion::latest()->first();


        return view('medic.medic_volunteer.verify.predicate1', compact('users','_qt_1','_qt_2','_qt_3','_qt_4','emotion','advice','medicines'));
    }

    

    public function edit2($id)
    {
       
        $users = User::findOrFail($id);   
        $user_id = User::findOrFail($id);  
        return view('medic.medic_volunteer.verify.predicate2', compact('users'));
    }

  
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        
        $medicines = Medicine::findOrFail($id);
        $medicines->update($requestData);

        return redirect('predicate1/1')->with('flash_message', 'Medicine updated!');
    }

  
    public function destroy($id)
    {
        

        Medicine::destroy($id);
        
       
        return redirect()->back();
    }
}
