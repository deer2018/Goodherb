<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Questionone;
use App\Models\Questionone_two;
use App\Models\Questionone_tree;
use App\Models\Questionone_four;
use App\Models\Questiontwo;
use App\Models\Questiontwo_two;
use App\Models\Questiontwo_tree;
use App\User;
use \PDF;

class MedicPDFController extends Controller
{
    public function report(Request $request ,$id)
    {
          //ค้นหาตาม pk
          $users = User::findOrFail($id);

          //ค้นหา column ไหนก็ได้  -- questionnaire 1 
          $_qt_1 = Questionone::where('user_id', '=', $users->id)->firstOrFail();
          $_qt_2 = Questionone_two::where('user_id', '=', $users->id)->firstOrFail();
          $_qt_3 = Questionone_tree::where('user_id', '=', $users->id)->firstOrFail();
          $_qt_4 = Questionone_four::where('user_id', '=', $users->id)->firstOrFail();

           //ค้นหา column ไหนก็ได้  -- questionnaire 2
          $_qt2_1 = Questiontwo::where('user_id', '=', $users->id)->firstOrFail();
          $_qt2_2 = Questiontwo_two::where('user_id', '=', $users->id)->firstOrFail();
          $_qt2_3 = Questiontwo_tree::where('user_id', '=', $users->id)->firstOrFail();

         $compact = compact('users','_qt_1','_qt_2','_qt_3','_qt_4','_qt2_1','_qt2_2','_qt2_3');

         $pdf = PDF::loadView('pdf.medic_pdf', $compact);
         return @$pdf->stream('medic_pdf.pdf');

        // return view('pdf.medic_pdf'  , compact('users','_qt_1','_qt_2','_qt_3','_qt_4','_qt2_1','_qt2_2','_qt2_3'));
    }
}
