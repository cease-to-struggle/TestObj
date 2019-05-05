<?php

$con = mysqli_connect('localhost','root','root') or die('Could not connect: ' . mysqli_connect_error());

$db = mysqli_select_db($con,'laravel');

$char = mysqli_set_charset($con,'utf8');

$sql = 'select * from users';

$res = mysqli_query($con,$sql);

echo '<pre />';

while($row = mysqli_fetch_assoc($res))
{
	if($row['id']==5)
	var_dump($row);
}

$close = mysqli_close($con);

var_dump($close);