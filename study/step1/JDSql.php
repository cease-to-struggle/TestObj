<?php
$jdPushUrl = "https://timesoms.com/api/tracking/jd4plstatus/push";
$jdToken = "Bearer 1LF3Y1jCYfSyXwFSkSxbvAWah61R65bwqnjT8Ejr0aQxE2i7SORTdtXiWOJ3";
$arr = array(
	'J0100000000000019253',
	);
$str = <<<abc
insert into jd_orders_channel(ddl,order_type,order_source,order_number,order_create_at,created_at,updated_at) values
abc;
$time = "2019-01-30 09:43:12";
foreach ($arr as $key => $value) {
    $str .= '("'.$value.'",1,"JD.com","'.$value.'","'.$time.'","'.$time.'","'.$time.'"),';
}
$str = rtrim($str,",");
print_r($str.";");