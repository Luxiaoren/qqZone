<?php
header("Content-type:text/html;charset=utf-8");
require_once '../../data/dbhelper.php';

$db=new dbhelper();

$sql="select count(*) from user_info";

$res=$db->execute_select($sql);
$num=(int)($res[0]*3/2);

$user_id=rand(1,$num);
//echo "<br>".$user_id; //测试随机数产生



?>

<!DOCTYPE html>
<html>
<head>
	<title>添加好友</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
	<body>
	<iframe src="../common/head.html" width ="100%" height ="62px" name = "head"  scrolling="no" frameborder="no"></iframe>
	<div id="addFriend">
		
	</div>
	</body>
</html>