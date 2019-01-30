<?php 
$i = 1 ;$j = 0 ;$k = 0;
$res1 = $i || $j && $k;
$res2 = ($i||$j) && $k;
var_dump($res1,$res2);

class test
{
	public $prop_is = '123';
}
$a = new test();
$str = "prop";
echo  $a->{$str.'_is'},'<br />';
//echo  $a->($str.'_is');
$arr = [
	'a'=>'',
	'b'=>null
];
$res = json_encode($arr);
echo $res;

