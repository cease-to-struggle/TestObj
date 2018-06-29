<?php
namespace App\Services;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Answer;

class RegisterService
{
	public function saveData($params)
	{
		$user = User::create([
			'username'=>$params['user_loginName'],
			'email'=>$params['user_eMail'],
			'telephone'=>$params['user_tel'],
			'password'=>$params['user_loginPassword'],
			]);


user_sex
user_age
birthday
user_tel
user_address
user_eMail
question
answer
			
	}
}