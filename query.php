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
$uploadUserId=$_POST['uploadUserId'];
$db=mysqli_connect($servername,$username,$password,$dbname);
$db->query("SET NAMES UTF8");
if(!$db){
	die("数据库连接失败：".mysqli_connect_error());
}
$sql="select * from foods_menu_info where id='".$id."' or uploadUserId='".$uploadUserId."'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
	    echo "美食ID：".$row["id"]."<br/>"."美食名字：".$row["name"]."<br/>"."美食描述：".$row["description"]."<br/>"."美食标签：".$row["tips"]."<br/>"."上传用户：".$row["userName"]."<br/>"."用户等级：".$row["level"]."<br/>"."用户id：".$row["uploadUserId"]."<br/>";
	}
}else{
	echo"查无此人";
}
mysqli_free_result($result);
mysqli_close($db);
?>
</html>
