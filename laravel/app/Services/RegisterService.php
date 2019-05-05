<?php
namespace App\Services;
use App\Admins\User;
use App\Admins\UserInfo;
use App\Admins\Answer;
use DB;
use Mail;

class RegisterService
{
	public static function saveData($params)
	{
			DB::beginTransaction();
			//存储账号信息
			$user = User::create([
				'username'=>$params['user_loginName'],
				'email'=>$params['user_eMail'],
				'telephone'=>$params['user_tel'],
				'password'=>$params['user_loginPassword'],
				]);
			//处理住址信息
			if(!empty($params['user_address']))
			{
				$params['user_address'] = explode('-', $params['user_address']);
			}

			if(count($params['question']) != count($params['answer'])){
					throw new Exception('问题和答案都不能为空');
			};
			//存储用户个人信息
			$user->info()->create([
				'realname'=>$params['user_name']??'',
				'sex'=>$params['user_sex']??'0',
				'age'=>$params['user_age']??'',
				'birthday'=>$params['user_age']??'',
				'address_province'=>$params['user_address']?$params['user_address'][0]:'',
				'address_city'=>$params['user_address']?$params['user_address'][1]:'',
				'address_region'=>$params['user_address']?$params['user_address'][2]:'',
				]);

			$anwer = array_combine($params['question'], $params['answer']);
			foreach ($anwer as $k => $v) {
					# code...
					$user->answer()->create([
						'question_id'=>$k,
						'answer'=>$v
						]);
				}	
			/*if($user){
				Mail::send();
			}*/

			//dd($user->answer());

			if(!$user || !$user->info() || !$user->answer())
			{
				DB::rollBack();
				return  [
					'status'=>'201',
					'message'=>'注册失败'
				];	
			}


			DB::commit();
			dd($user->answer());
			return [
			'status'=>200,
			'message'=>'注册成功'
			];
		
		}
}
