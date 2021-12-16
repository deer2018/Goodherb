<?php

namespace App\Http\Controllers\Medic;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Diagnosis;
use App\Models\Diagnosis2;
use App\Models\Emotion_t;
use App\Models\Medic_Emotion;
use App\Models\Medicine;
use App\Models\Questionone;
use App\Models\Questionone_two;
use App\Models\Questionone_tree;
use App\Models\Questionone_four;
use App\Models\Questiontwo;
use App\Models\Questiontwo_two;
use App\Models\Questiontwo_tree;

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


    public function store_advice(Request $request)

    {


        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;


        $diagnosis = Diagnosis::firstOrNew(array('user_id' => $user_id));
        $diagnosis->fill($requestData)->save();

        return redirect()->back();
    }

    public function store_emotion(Request $request)
    {

        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;


        $emotions = Medic_Emotion::firstOrNew(array('user_id' => $user_id));
        $emotions->fill($requestData)->save();

        

        // $emotions = DB::table('medic_emotion')
        //     ->leftJoin('emotion_r', 'medic_emotion.emotion', '=', 'emotion_r.emotion')
        //     ->get();

        return redirect()->back();
    }

    public function store_medicine(Request $request)
    {

        // ดึงข้อมูลจากหน้าฟอร์ม
        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;

        // $requestData["total"] =  $requestData["quantity"]->sum();
        // // $requestData["quantity"]->sum($requestData["total"]);
       
    
        Medicine::create($requestData);
        return redirect()->back();
    }

    public function show(MedicVolunteerController $medicVolunteerController)
    {
        //
    }


    public function edit($id, Request $request)
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

        $medicines = Medicine::where('user_id', '=', $users->id)->latest()->paginate($perPage);

        $advice = Diagnosis::where('user_id', '=', $users->id)->first();

        // $emotion = Medic_Emotion::where('user_id', '=', $users->id)->first();

        $emotion = Medic_Emotion::leftJoin('emotion_t','medic_emotion.emotion','=','emotion_t.id')
             ->select('emotion_t.*','emotion_t.emotion_name')
             ->where('user_id', '=', $users->id)
             ->first();


        return view('medic.medic_volunteer.verify.predicate1', compact('users', '_qt_1', '_qt_2', '_qt_3', '_qt_4', 'emotion', 'advice', 'medicines'));
    }


    public function edit2($id, Request $request)
    {
        //แบ่งหน้ารายการ
        $perPage = 10;

        //ค้นหาตาม pk
        $users = User::findOrFail($id);
         //ค้นหา column ไหนก็ได้   
        $_qt_1 = Questiontwo::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_2 = Questiontwo_two::where('user_id', '=', $users->id)->firstOrFail();
        $_qt_3 = Questiontwo_tree::where('user_id', '=', $users->id)->firstOrFail();
         
         $advice2 = Diagnosis2::where('user_id', '=', $users->id)->first();
      

        return view('medic.medic_volunteer.verify.predicate2', compact('users','_qt_1', '_qt_2', '_qt_3','advice2'));
    }

    public function store_advice2(Request $request)
    {


        $requestData = $request->all();
        $user_id = $request->get('user_id');
        $requestData["user_id"] = $user_id;

        $diagnosis2 = Diagnosis2::firstOrNew(array('user_id' => $user_id));
        $diagnosis2->fill($requestData)->save();

        return redirect()->back();
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
