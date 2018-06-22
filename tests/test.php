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
$str = '123';
$arr = explode(',', $str);
var_dump(in_array($str, $arr));

		