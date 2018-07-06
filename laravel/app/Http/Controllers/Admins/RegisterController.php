<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admins\User;
use App\Admins\SecurityQuestion;
use Validator;
use App\Services\RegisterService;


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
        try{
            $validator = Validator::make($request->all(),$this->getValidateRules());
            if($validator->fails())
            {
                throw new \Exception(implode("\r\n",$validator->errors()->all()));
            }
           

        $inputs = $request->all();

        $res = RegisterService::saveData($inputs);

        
          return $res['message'];
       
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        
    }


    public function getValidateRules()
    {
        return [
              "user_loginName" => 'bail|required|alpha_num|max:30|min:6',
              "user_loginPassword" => "required",
              "user_loginPassword_1" => "required",
              "user_name" => "required",
              "user_sex" => "required",
              "user_age" => "required",
              "birthday" => "nullable",
              "user_tel" => "nullable",
              "user_address" => "nullable",
              "user_eMail" => "required",
              "question" => "required",
              "answer" => "required",
        ];
    }
}
