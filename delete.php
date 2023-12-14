<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除美食信息</title>
</head>

<body  bgcolor="#0066CC" style="font-size:36px">
</body>
<?php

$servername = "192.168.56.104";
$username = "root";
$password = "root";
$dbname = "MYfood";

$id=$_POST['id'];


$db=mysqli_connect($servername,$username,$password,$dbname);
$db->query("SET NAMES UTF8");
if(!$db){
	die("数据库连接失败：".mysqli_connect_error());
}
$sql="delete from foods_menu_info where id='".$id."'";

if(!mysqli_query($db,$sql)){
		echo"美食信息删除失败";
	}
else{
	echo"美食信息已删除";
}

mysqli_close($db);
?>
</html>
