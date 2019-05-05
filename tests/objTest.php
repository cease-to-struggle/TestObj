<?php 
$str = 'México';
echo json_encode($str),"&nbsp;&nbsp;&nbsp;";
echo substr(json_encode($str),1,-1),"&nbsp;&nbsp;&nbsp;";


$std = '中国abc';
echo json_encode($std);

$arr = ['中国'];
echo json_encode($arr);

$ste ='\u4e2d\u56fdabc';
$json = '["'.$ste.'"]';
$arr = json_decode($json);
echo $arr[0];
