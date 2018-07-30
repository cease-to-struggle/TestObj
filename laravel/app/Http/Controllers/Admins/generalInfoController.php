<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins\User;
use App\Admins\UserInfo;
use Auth;
use DB;
use stdClass;

class GeneralInfoController extends Controller
{
	//public $

    public function index()
    {  
        $user =Auth::user();
        $userInfo = $user->info;
       // $login_account = $user->
        
        return view('admins.index',compact('user','userInfo'));

    }


}
