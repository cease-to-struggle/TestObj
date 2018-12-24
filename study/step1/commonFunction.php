<?php
echo '<pre />';

/**
 * @function str_pad($string,$length,$pad_string,$pad_type);
 * 将字符串填充为固定长度
 *
 * @param1 String $string  the string to fill
 * @param2 Integer $length the length of result;
 * @param3 String $pad_string  the  string used for filling;
 * @param4 const $pad_type   the side of the string filled [STR_PAD_LEFT||STR_PAD_BOTH||STR_PAD_RIGHT]
 * @param4 type :BOTH（先右后左  依次填充）？
 *
 * @return string
 */

    $num = 1;
    $num1 = 251;
    $num_res = str_pad($num,4,0,STR_PAD_LEFT);
    $num_res1 = str_pad($num1,4,0,STR_PAD_BOTH);
    echo '函数str_pad测试结果:';
    echo $num_res,"\n",'<br />',"\n",$num_res1,'<hr />',"\n";

/**
 * @function array_rand($array,$num)
 * 随机取出数组指定数量的元素的键名
 *
 * @param Array $array   [the total array]
 * @param Integer $num  [the ammount]
 *
 * @return Mixed     $num==1?string:array
 */

    $array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $str = array_rand($array,1);
    $arr = array_rand($array,2);
    echo '函数array_rand测试结果:',"\n";
    var_dump($str,$arr);
    echo '<hr />';

/**
 * @function array_search(value,array,strict)
 * 在数组中搜索某个键值，并返回对应的键名(找到即停止)。
 *
 * @param Mixed $value   the key value
 * @param Array $array   the array to search
 * @param Boolean $strict  strict data type
 *
 * @return Mixed
 */

    echo '函数array_search测试结果:',"\n";
    $a=array("a"=>array('5'),"b"=>5,"c"=>"5");
    echo array_search(array('5'),$a,true),'<hr />',"\n";

/**
 * @function array_shift($array)
 * 删除数组第一个元素并返回元素的值
 *
 * @param Array $array   the array to deal
 *
 * @return Mixed
 */
//[NOTE] 弹出后数组中的元素被移除
 $a = array("a"=>array('5'),"b"=>5,"c"=>"5");
 $b = array_shift($a);
echo '函数array_shift测试结果:',"\n";
 print_r($a);
 var_dump($b);
 echo '<br />',"\n";
 echo gettype($b),'<hr />',"\n";

/**
 *array_unshift($array,$val1,$val2,...);
 * 将$val1,$val2做为一个整体插入数组的第一个元素的前面(即插入后的元素顺序和给定的参数顺序保持一致)
 *
 * @param  Array  $array  the array to insert
 * @param  Mixed  $val1
 * @param  Mixed  $val2
 *
 * @return int   返回新的数组的长度
 */
$arr = ['a'=>'a'];
$res = array_unshift($arr,'b','c');
echo '函数array_unshift测试结果:',"\n";
var_dump($res,$arr);
echo '<hr />',"\n";


/**
 * array_pop($array)
 * 从数组末尾弹出一个元素并返回该元素的值
 *
 * @param1 Array $array  the array to deal with
 *
 * @return Mixed  the last element of $array
 */
//[NOTE] 弹出后数组中的元素被移除
 $arr = ['a','b','c'];
 $res = array_pop($arr);
 echo '函数array_pop测试结果:',"\n";
 var_dump($res,$arr);
 echo '<hr />',"\n";

/**
 *array_push($array,$val1[,$val2,...]);
 * 将$val1,$val2插入数组的最后
 *
 * @param1  Array  $array  the array to insert into
 * @param2  Mixed  $val1
 * @param3  Mixed  $val2
 *
 * @return int   返回新的数组的长度
 */
//NOTE:如果只是向数组末尾添加一个元素则不推荐谁用函数  使用$arr[]=XX 即可，可避免调用函数过程
  $arr = array('a','b');
  $res = array_push($arr,'c','d');
 // $str = 'fen';
 // $res1 = array_push($str,'zh','ou');
 echo '函数array_push测试结果:',"\n";
  var_dump($res,$arr);
 // var_dump($res1,$str);
  echo '<hr />',"\n";

/**
 * in_array($value,$array[,$strict]);
 * 判定某个元素是否在数组中
 *
 * @param1  Mixed  $value  Value to check
 * @param2  Array  $array  the array to be matched
 * @param3  Boolean  $strict  match the value's type or not
 *
 * @return Boolean
 */
 $a = 1;
 $arr = ['1','a','b','c'];
 $res = in_array($a,$arr,true);
 echo '函数in_array测试结果:',"\n";
 var_dump($res);
 echo '<hr />',"\n";

/**
 * array_key_exists($key, $search);
 * 判定某个元素是否在数组中
 *
 * @param1  Mixed  $key    Value to check
 * @param2  Array  $search  the array to be matched
 *
 * @return Boolean
 */
 //[NOTE] array_key_exists 和 isset 常用于判定元素是否存在   前者检测键名，后者则以键值为判定条件，若存在键名但对应键值为null 则二者返回值有别
 $a = 'a';
 $b = 1;
 $e = 'd';
 $arr = array('a'=>null,'b','c','d'=>10);
 $resa = array_key_exists($a,$arr);
 $resat = isset($arr[$a]);
 $resb = array_key_exists($b,$arr);
 $resbt = isset($arr[$b]);
 $c = $arr[$b];
 echo '函数array_key_exists测试结果:',"\n";
 var_dump($arr,$resa,$resat,$resb,$resbt,$c,$f);
 echo '<hr />',"\n";

/**
 * shuffle($array);
 * 随机排序数组
 *
 * @param1  Mixed  $array    array to sort
 *
 * @return Boolean
 */
//[NOTE]随机排序，每次执行结果不一致
 $res = shuffle($arr);
 echo '函数shuffle测试结果:',"\n";
 var_dump($arr,$res);
 echo '<hr />',"\n";

/**
 * array_reverse($array[,$preserve]);
 * 返回数组逆序
 *
 * @param1  Mixed  $array    the array to be processsed
 * @param2  Boolean  $preserve   if true then preserve the numeric key;  Always preserve the non-numeric key
 *
 * @return Array
 */

$arr = ['a'=>1,'b'=>2,3,4];
$res = array_reverse($arr);
$res1 = array_reverse($arr,true);
 echo '函数array_reverse测试结果:',"\n";
 var_dump($arr,$res,$res1);
 echo '<hr />',"\n";




/**
 * array_map($callback,$array[,$array1,$array2...]);
 * 使用回调函数处理每一个数组元素  返回处理后的数组
 *
 * @param1  Callable  $callback   Callback function applied to each element
 * @param2  Array  $array    the array to be processsed 
 * 
 * @return Array   
 */

$res = array_map(function($e){
  return $e + 1;
},$arr);
 echo '函数array_map测试结果:',"\n";
 var_dump($res);
 echo '<hr />',"\n";

$arr = [-9=>1,-7=>2,-6=>3,-4=>4];
unset($arr[1]);//unset() 不会重建索引 直接加入新元素  会在曾经存在的索引最大值 基础上加1，若为负数则从0开始 之后依次增加。
$arr[]=6;
print_r($arr);


//array_fill(strat_index,num,string);  参数1：设定起始索引，如为负数则第二个索引从0开始  参数2:插入元素的数量  参数3: 用来填充的值
$res=array_fill(5,2,[1,2]);
var_dump($res);
//
//
//array_filter($array,$callback[,int $flog]);  用于过滤数组中的数据,当回调函数返回为true时 才会将元素放入返回的数组中; 参数1 :要处理的数组   参数2:回调函数   参数3: 传入回调函数的参数形式   不传入回调函数则直接判定元素值的布尔值
//
//array_walk()  第三个参数  传入回调函数的数组键值键名以外的第三个参数
//
//array_combine(); 数组合并  第一个数组元素作为键名  第二个数组作为键值 
//array_merge();  数组组合为一个元素   如果有相同的字符串键名 则后者覆盖前者

//array_diff();  对比数组  输出在第一个数组中而不再其它数组中元素组成的数组  即数组差集
//array_intersect();  数组交集
//array_unique;  去除重复元素
//arrray_flip();  数组名值置换  名变为值  值变为名
//
//array_chunk()
//array_column()
//
//count();  统计数组或对象的元素的个数   第二个参数设为COUNT_RECURSIVE(或 1)则会递归计数  用于处理多维数组   未初始化的数组会返回0  空数组也会返回0   建议isset()判定是否初始化
//echo count([null]);
//sort();  排序 引用操作  原数组会被更改  返回布尔值
//sizeof();  count()别名
//key();
//current()
//end()
//next()
//prev()
//reset()
//each()
//
//compact()  变量转为数组  变量名作为键名  变量值作为键值
//extract()  compact()函数的逆操作
//
//list()  
//array_splice();  从数组中取出指定的一段
//array_count_values();统计数组中各个值的出现次数
//array_sum();

