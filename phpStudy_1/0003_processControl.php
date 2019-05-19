<?php 
/**
 *条件控制语句
 */
//if分支结构 括号中为表达式
if($a>$b){
	//do something
}else if($a==$b){
	//do something
}else{
	//do something
}

//switch 语句
switch ($variable) {
	case 'value1':
		# code...
		break;
	case 'value2':
		# code...
		break;
	default:
		# code...
		break;
}

/**
 * 循环语句结构
 */
for ($i=0; $i < $n; $i++) { 
	# code...
}

foreach ($variable as $key => $value) {
	# code...
}

while ($i <= 10) {
	# code...
}
//do while  至少执行一次 代码块
do{
	# code...
}while($i <= 10);


//break  中断循环
//continue  跳出本次循环 进行下一次循环