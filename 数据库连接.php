<?php
$host="127.0.0.1";
$userName="root";
$password="dt2009";
$dbName="user";
$coonID=mysql_connect($host,$userName.$password);
if(mysql_db($dbName,$connID)){
	echo"数据库连接成功";
}
else{
	echo"数据库连接失败";
}
?>