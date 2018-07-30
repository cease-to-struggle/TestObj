<?php

//获取月份
$mon = $_GET['month']??date('m');
$year = $_GET['year']??date('Y');
//获取当月天数
$day=date('t',mktime(0,0,0,$mon,1,$year));
//获取当月1号是星期几
$weekday =date('t',mktime(0,0,0,$mon,1,$year));

//打印日历星期表头
echo"<div align='center'>";
echo"<table border='0'>";
echo"<h3><div>{$year}年{$mon}月</div></h3>";
echo "<tr>";
echo "<th>日</th>";
echo "<th class='td1'>一</th>";
echo "<th class='td1'>二</th>";
echo "<th class='td1'>三</th>";
echo "<th class='td1'>四</th>";
echo "<th class='td1'>五</th>";
echo "<th>六</th>";
echo "</tr>";






