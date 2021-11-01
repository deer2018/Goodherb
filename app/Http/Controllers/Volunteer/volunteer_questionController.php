<?php

namespace App\Http\Controllers\Volunteer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Questionone;
use App\Models\Questiontwo;
use App\Models\Questiontree;
use App\Models\Questiontree_two;

class volunteer_questionController extends Controller
{
    public function volunteer_question()
    {
        {
            $user = Auth::user();
            $user_id = $user->id;

            $tm1 = Questionone::where('user_id'  ,$user_id )->get();
            $update_1 = "";
            foreach($tm1 as $item){
                if(!empty( $item->updated_at )){
                    $update_1 = $item->updated_at ;
                }
            }

            $tm2 = Questiontwo::where('user_id'  ,$user_id )->get();
            $update_2 = "";
            foreach($tm2 as $item){
                if(!empty( $item->updated_at )){
                    $update_2 = $item->updated_at ;
                }
            }

            $tm3 = Questiontree::where('user_id'  ,$user_id )->get();
            $update_3 = "";
            foreach($tm3 as $item){
                if(!empty( $item->updated_at )){
                    $update_3 = $item->updated_at ;
                }
            }

            $tm4 = Questiontree_two::where('user_id'  ,$user_id )->get();
            $update_4 = "";
            foreach($tm4 as $item){
                if(!empty( $item->updated_at )){
                    $update_4 = $item->updated_at ;
                }
            }
    
            return view('/volunteer/volunteer_questionnaire', compact('user_id','update_1' , 'update_2', 'update_3', 'update_4') );
        }
    }
}