<?php
//半成品，待拆分


//获取月份
$mon = $_GET['month']??date('m');
$year = $_GET['year']??date('Y');
$td = date('d');
//获取当月天数
$day=date('t',mktime(0,0,0,$mon,1,$year));
//获取当月1号是星期几
$w =date('w',mktime(0,0,0,$mon,1,$year));
//获取上一个月时间
$prevM = $mon==1?12:$mon-1;
$nextM = $mon==12?1:$mon+1;
$prevY = (int)$year-1;
$nextY = (int)$year+1;

$data = $prevM==12?"year=$prevY&month=$prevM":"year=$year&month=$prevM";
$data1 = $nextM==1?"year=$nextY&month=$nextM":"year=$year&month=$nextM";
//打印日历星期表头
$month =sprintf("%02s",$mon);
echo"<div align='center'>";
echo"<table border='0'>";
echo"<h3><a href='calendar.php?year=$prevY'><<</a><span>{$year}年</span><a href='calendar.php?year=$nextY'>>></a>
<a href='calendar.php?$data'><</a><span>{$month}月</span><a href='calendar.php?$data1'>></a></h3>";
echo "<tr>";
echo "<th width = '25'>日</th>";
echo "<th width = '25' class='td1'>一</th>";
echo "<th width = '25' class='td1'>二</th>";
echo "<th width = '25' class='td1'>三</th>";
echo "<th width = '25' class='td1'>四</th>";
echo "<th width = '25' class='td1'>五</th>";
echo "<th width = '25'>六</th>";
echo "</tr>";



$lastDay = date('t',mktime(0,0,0,$prevM,1,$year));

//展示日期
echo  "<tr onmouseOver='overTr(this)' onmouseOut='outTr(this)'>";
//可能出现某月日期占用6行的情况 因此以6行作为固定格式
for($i=1;$i<=42;$i++)
{
	if($i<=$w){
		//暗色展示第一周属于上月几天日期
		$num = $lastDay-$i;
		echo '<td><font color=\'gray\'>', $num ,'</font></td>';
	}elseif($i>$day+$w){
		//暗色展示下月部分几天日期
		$num = $i-$day-$w;
		echo '<td><font color=\'gray\'>', $num ,'</font></td>';
	}else{
		$num =$i-$w;
		echo '<td onmouseOver=\'overTh(this)\' onmouseOut=\'outTh(this)\'><a href=\'\'>';
		if($num == $td){
			echo "<font color='red'>$num</font>";
		}else{
			echo $num;
		}
		echo '</a></td>';
	}
	if($i%7 == 0 && $i !=42)
	{
		echo '</tr><tr onmouseOver=\'overTr(this)\' onmouseOut=\'outTr(this)\'>';
	}
}

echo '</tr>';







