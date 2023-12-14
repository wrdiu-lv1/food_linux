<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查询美食信息</title>
</head>

<body  bgcolor="#0066CC" style="font-size:36px">
</body>
<?php

$servername = "192.168.56.104";
$username = "root";
$password = "root";
$dbname = "MYfood";

$id=$_POST['id'];
$name=$_POST['name'];
$description=$_POST['description'];
$tips=$_POST['tips'];

$db=mysqli_connect($servername,$username,$password,$dbname);
$db->query("SET NAMES UTF8");
if(!$db){
	die("数据库连接失败：".mysqli_connect_error());
}
$sql="update foods_menu_info set name ='".$name."',description='".$description."',tips='".$tips."'where id='".$id."'";
if(mysqli_query($db,$sql)){
	    echo "修改成功";
}else{
	echo"修改失败";
}
mysqli_close($db);
?>
</html>
