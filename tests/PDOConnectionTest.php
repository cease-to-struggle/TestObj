<?php
$dsn ="mysql:host=127.0.0.1:3306;dbname=laravel";
$user = "root";
$password = "root";
try{
	$dbh = new PDO($dsn,$user,$password);
}catch(PDOException $e){
	echo 'connection failed:'.$e->getMessage();
}
$sql = "show full tables where Table_Type = 'BASE TABLE'";
$result = $dbh->query($sql);
print_r($result->fetchAll());