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
    {   //dd(Auth::user()->id);
        $user = Auth::user()->info;
        dd($user);
        echo '<pre/>';
        $userInfo = $user->info;
        //var_dump($userInfo);
        echo '<hr/>';
        //$answers= $user->answer;
        //$collection= collect($answers);
     /*   $arr = $collection->map(function($item,$key){
            return $collection[$key][]=[$item->question->question,$item->answer];

        });*/
        //dd($arr->all());

       // var_dump($answer);die;
        return view('admins.index',compact('user','userI'));
    }


}
