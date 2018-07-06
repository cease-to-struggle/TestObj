<?php
/*$arr =['aa'=>'123','bb'=>'is','cc'=>'who'];
echo '<pre/>';
print_r($arr);
var_dump($_SERVER);*/
echo '<pre/>';
/*$arr =['1','2','3','-2','-5'];
print_r($arr);
sort($arr);
print_r($arr);*/
/*$str = '123';
$arr = explode(',', $str);
var_dump(in_array($str, $arr));*/
/*$arr=[];
$a=null;
var_dump(in_array($a,$arr));*/

/*$a= 5;
$b= sprintf("%-01.2f",$a);
echo $b;*/
//print_r($_SERVER);
/*//以增加的r模式打开
$fp = fopen('../1.txt','r+');

//你分发现每次只读一个字符
echo  fgetc($fp);

//我要全部读取可以,读取一次将结果赋值一次给$string
while($string = fgetc($fp)){
	if($string == "\r\n" || $string == "\n"){
		   echo $string,'<hr />';
	}else{
				echo $string;
	}

}*/
//追加方式打开文件
$fp=fopen('../1.txt','a');

//设置时间
$time=time();

//得到用户名
$username=trim($_POST['username']);
//得到内容
$content=trim($_POST['content']);


//组合写入的字符串：内容和用户之间分开，使用$#
//行与行之间分开，使用&^
$string=$username.'$#'.$content.'$#'.$time.'&^';

//写入文件
fwrite($fp,$string);

//关闭文件
fclose($fp);


header('location:index.php');