<?php

require_once '../data/dbhelper.php';
session_start();

$username=$_SESSION['username'];
$password=$_SESSION['password'];
$email=$_SESSION['email'];

	$db = new dbhelper();
	$sql="select user_friend from user_info where id=1";

	$res = $db->execute_select($sql);
	$friends=$res[0];
	if($friends==""){
		$mes="暂无好友";
		
	}

	
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
		<style>
			
		</style>
	</head>
<iframe src="./common/head.html" width ="100%" height ="62px" name = "head"  scrolling="no" frameborder="no"></iframe>
<div id="friendList">好友列表
	<a><?php ?></a>
	
</div>
</html>