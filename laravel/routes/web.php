<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$data = json_encode([
                    'USERNAME'=>'nelson.ho@times-ecommerce.com',
	                'PASSWORD'=>'123456a@',
	                'SOURCE'=>'0',
	                'CAPTCHA'=>''
                    ]);
 $reqOptions = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    ],
                'body'=>json_encode([
                    'USERNAME'=>'nelson.ho@times-ecommerce.com',
	                'PASSWORD'=>'123456a@',
	                'SOURCE'=>'0',
	                'CAPTCHA'=>''
                    ])
                ];
            $apiGuzzleClient = new GuzzleHttp\Client(['verify'=>false]);
            //$apiGuzzleClient->setDefaultOption('verify',false);
            $res = $apiGuzzleClient->request('POST', 'https://api2.viettelpost.vn/api/user/Login',$reqOptions);
            $res =$res->getBody();
            
dd(json_decode($res));
   // return view('admins.login');
});

Auth::routes();

Route::group(['middleware'=>'web'],function(){

});




sudo apt-get remove python2.7
sudo apt-get remove --auto-remove python2.7
sudo apt-get purge python2.7
sudo apt-get purge --auto-remove python2.7

1、新建小包状态表格（order表关联）；
2、将oms系统order表中的小包状态数据导入到新建表格中；
3、修改现有小包状态相关的代码，使用新建表格进行相关数据操作；
4、删除oms系统order表中小包状态相关字段；



 