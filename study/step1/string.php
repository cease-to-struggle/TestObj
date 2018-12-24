<?php
echo '<pre/>';
$str ='afaewfsdfassfa';
$res = strpos($str,'d');
echo $res,'<br />';


$arr = [
  ['a'=>'a1','b'=>'b1','c'=>'c1'],
  ['a'=>'a2','b'=>'b2','c'=>'c2'],
  ['a'=>'a3','b'=>'b3','c'=>'c3'],
  ['a'=>'a4','b'=>'b4','c'=>'c4'],
];
$res = array_column($arr,'a','b');
print_r($res);