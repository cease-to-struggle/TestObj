<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins\User;
use App\Admins\SecurityQuestion;

class RegisterController extends Controller
{
    //
    public function showRegisterForm()
    {
        $questions = SecurityQuestion::get();
        return view('admins.register',compact('questions'));
    }

    public function validateName(Request $request)
    {
        $userName=$request->input('userName');
        //return response($userName);
        $user =User::whereUsername($userName)->first();
        if(!$user){
           return response('0');
        }
        return response('1');

    }

    public function postForm(Request $request)
    {

    }
}
