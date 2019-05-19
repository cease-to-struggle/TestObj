<?php
//设置自定义的错误处理函数  参数为回调函数名
//
set_error_handler('customError');

function customError(int $errno,string $errstr,string $errfile,int $errline)
{
	//输出错误消息
	echo '<b>Custom error:</b> [',$errno,'] ',$errstr,'<br />';
	//输出错误文件和错误行
	echo 'error on line ',$errline,' in ',$errfile,'<br />'; 
	//echo 'Ending Script';
	//终止程序运行 
	exit;
}

$test = 2;

//触发自定义错误
if($test > 1)
	trigger_error('Something is wrong !');