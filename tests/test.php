<?php
/*$arr =['aa'=>'123','bb'=>'is','cc'=>'who'];
echo '<pre/>';
print_r($arr);
var_dump($_SERVER);*/
//echo '<pre/>';
/*if(!empty($_FILES['upfile'])){
	print_r($_FILES);
}*/
/*$obj1 = new stdClass();
$obj1->username = 'aaa';
$obj2 = new stdClass();
$obj2->username = 'bbb';
$obj3 = new stdClass();
$obj3->username = 'ccc';
$obj4 = new stdClass();
$obj4->username = 'ddd';
$obja = new stdClass();
$obja->a = $obj1;
$obja->c = $obj2;
$objb = new stdClass();
$objb->a = $obj3;
$objb->b = $obj4;
$arr1 = json_decode(json_encode($obja),true);
$arr2 = json_decode(json_encode($objb),true);
$arr = array_merge_recursive($arr1,$arr2);
print_r($arr);
//$arr = array($obj1,$obj2,$obj3,$obj4);
function printElement(array $arr)
{
	foreach ($arr as $k => $v) {
		if(is_array($v)){
			printElement($v);
		}else{
			echo $v.'<br/>';			
		}
	}
}

 printElement($arr);
;*/
////判断$Year和$Month是否为空,如果为空就获取系统当前日期,否则用$_GET获取
/*$Year = empty($_GET['Year']) ? date("Y"): $_GET["Year"];
$Month = empty($_GET['Month']) ? date("m"): $_GET["Month"];
////获取当前日期////
$Today = date("Ymj");
////初始化日期数组////
$Maxday = array("1",
"2",
"3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20",
"21","22","23","24","25","26","27","28","29","30","31");
$Maxday_count = count($Maxday);
////初始化星期数组////
$Weekday = array("<font color='red'>Sun</font>","Mon","Tue","Wed","Thu","Fri","<font color='red'>Sat</font>");
$Weekday_count = count($Weekday);
$daynum = 0;
$space = "<td> </td>";
$col = 0;
////打印表格头部////
?>
<form action="calendar.php" method="post" name="linked">
<table><tr><td colspan=3 align=center><a href="?Year=<?php if($Year-1 > 1900)echo $Year-1;else echo $Year;?>&Month=<?php echo $Month?>" onClick="javascript:document.linked.submit();" name="Year" style="text-decoration:none "><<</a> <?php echo $Year?> <a href="?Year=<?php if($Year+1 <2999) echo $Year+1;else echo $Year;?>&Month=<?php echo $Month?>" onClick="javascript:document.linked.submit();" name="Year" style="text-decoration:none ">>></a></td>
<td> </td><td colspan=3 align=center><a href="?Year=<?php echo $Year?>&Month=<?php if($Month-1 >0) if($Month-1 < 10)echo "0".($Month-1); else echo $Month-1; else echo $Month;?>" onClick="javascript:document.linked.submit();" name="Month"><<</a> <?php echo $Month;?> <a href="?Year=<?php echo $Year?>&Month=<?php if($Month+1 <13) if($Month+1 <10) echo "0".($Month+1);else echo ($Month+1); else echo $Month;?>" onClick="javascript:document.linked.submit();" name="Month">>></a></td></tr><tr><td colspan="8"></td></tr><tr>
<?php
////打印星期列表////
while(list(,$Weekvalue) = each($Weekday))
 echo "<td align=center> ".$Weekvalue." </td>";
echo "</tr>";
////打印日期列表////
//当月份为4,6,9,11的时候,从数组末尾删除一个值,也就是删除31这个值.
if($Month == 4 or $Month == 6 or $Month == 9 or $Month == 11)
{
 array_pop($Maxday);
 $Maxday_count--;
}
//先判断月份是否为2月,如果是的话再判断年份是否为闰年,如果是的话就从数组尾部移除2个值,否则就移除3个值.
if($Month == 2)
{
 if($Year % 4 == 0)
 {
 array_pop($Maxday);
 array_pop($Maxday);
 $Maxday_count-=2;
 }
 else
 {
 array_pop($Maxday);
 array_pop($Maxday);
 array_pop($Maxday);
 $Maxday_count-=3;
 }
}
////打印日期////
while($daynum < $Maxday_count)
{
echo "<tr>";
 while(list($colnum,$Dayvalue) = each($Maxday))
 {
  //判断当前日期为一星期中的哪一天
  $DayWeek = date("w",strtotime($Year."-".$Month."-".$Dayvalue));
  //当当前日期处于第1个,也就是每个月的第1天的时候,在它前面补上相应的空格子
  if($Dayvalue == 1)
   for($i=0;$i<$DayWeek;$i++)
   echo $space;//打印每个月空出的几个格子
  $daynum++;
  //当打印日期的时候与当前日期字符串进行比较,如果相等就将字体标为红色.
  if($Year.$Month.$Dayvalue == $Today)
  {
   $u1 = "<b><u>";
   $u2 = "</b></u>";
  }
  else
  {
   $u1 = "";
   $u2 = "";
  }
  if($DayWeek == 0 or $DayWeek == 6)
   $color = "red";
  else
   $color = "black";
  echo "<td align=center><font color=".$color."> ".$u1.$Dayvalue.$u2." </font></td>";
  //用本周第几天这个值加1,如果是7的倍数就换行退出此轮循环(换行打印)
  if(($DayWeek+1) % 7 == 0)
  {
   $col++;
   break;
  }
 }
echo "</tr>";
}*/
/*require 'test/test1.php';
echo __LINE__;*/
/*$test = array('a'=>'aaa','b'=>'who','c'=>'are');
$arr =var_export($test,true);

echo $arr,'<br/>';
var_dump(gettype($arr));*/
/*$a1=array("a"=>"red","b"=>"green","c"=>"gray");
$a2=array("a"=>"red","c"=>"yellow","d"=>"pink");

$result=array_intersect_key($a1,$a2);
print_r($result);*/

/*
$img = imagecreatetruecolor(500, 500);
$color = imagecolorallocate($img,255,0,0);
//var_dump($color);
imagefilledrectangle($img, 0, 0, 500, 500, $color);
header('content-type:image/jpeg');
imagejpeg($img);*/
/*$arr = array('id'=>1,'name'=>'Li');
$str = json_encode($arr);
$str1 = json_encode($str);
echo '<pre />';
echo $str;
echo $str1;
print_r(json_decode($str));
print_r(json_decode($str1));*/
/*$str = 'hello你好世界';
echo  strlen($str);*/
/*echo microtime(FALSE),"\n";
echo microtime(TRUE);*/


SZT00066222   2
SZT00066230   2
SZT00154685   2
SZT00154728   2
SZT00154729   2
SZT00154730   2
SZT00154731   2
SZT00154732   2
SZT00154733   2
SZT00154734   2
SZT00154735   2
SZT00154736   2
SZT00154737   2
SZT00154738   2
SZT00154739   2
SZT00154740   2
SZT00154741   2
SZT00154742   2
SZT00154744   2
SZT00154745   2
SZT00154746   2
SZT00154747   2
SZT00154748   2
SZT00154749   2
SZT00154750   2
SZT00154776   2
SZT00154777   2
SZT00154778   2
SZT00154779   2
SZT00154780   2
SZT00154781   2
SZT00154782   2
SZT00154783   2
SZT00154784   2
SZT00154785   2
SZT00154786   2
SZT00154787   2
SZT00154788   2
SZT00154789   2
SZT00154790   2
SZT00154791   2
SZT00154792   2
SZT00154793   2
SZT00154751   2
SZT00154752   2
SZT00154753   2
SZT00154754   2
SZT00154755   2
SZT00154756   2
SZT00154757   2
SZT00154758   2
SZT00154759   2
SZT00154760   2
SZT00154761   2
SZT00154762   2
SZT00154763   2
SZT00154764   2
SZT00154765   2
SZT00154766   2
SZT00154767   2
SZT00154768   2
SZT00154769   2
SZT00154770   2
SZT00154771   2
SZT00154772   2
SZT00154773   2
SZT00154774   2
SZT00154775   2

