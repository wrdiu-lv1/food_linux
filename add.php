<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加美食信息</title>
</head>

<body  bgcolor="#0066CC" style="font-size:36px">
</body>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$tips = $_POST['tips'];
$userName = $_POST['userName'];
$level = $_POST['level'];
$uploadUserId = $_POST['uploadUserId'];


$servername = "192.168.56.104";
$username = "root";
$password = "root";
$dbname = "MYfood";

$db = mysqli_connect($servername, $username, $password, $dbname);
$db->query("set NAMES UTF8");
if(!$db){die("数据库连接失败: " . mysqli_connect_error());}

$q = "INSERT INTO foods_menu_info(id,name,description,tips,userName,level,uploadUserId)
VALUES ('$id','$name','$description','$tips','$userName','$level','$uploadUserId')";
if(!mysqli_query($db,$q)){echo "美食信息添加失败";}
else{echo "美食信息已经成功添加";};
mysqli_close($db);
?>
</html>
