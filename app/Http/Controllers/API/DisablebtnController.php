<?php
namespace App\Http\Controllers\API;
use App\Models\Questiontree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Questionone;
use Illuminate\Support\Facades\Auth;


class DisablebtnController extends Controller
{
    public function getdisablebtn()
    {
        $users = Auth::user();
        $disbtn = Questionone::get();

        return $disbtn;
    }
}