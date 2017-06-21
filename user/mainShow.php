<?php

require_once '../data/dbhelper.php';
require_once '../lib/string.func.php';
session_start();

$username=$_SESSION['username'];
$password=$_SESSION['password'];
$email=$_SESSION['email'];

	$db = new dbhelper();
	$sql="select user_friend from user_info where id=1";
	//$sql="update user_info set user_friend ='Tom' where id=1";
	$res = $db->execute_select($sql);
	$friends=$res[0];
	
	$friend=explode('|', $friends);
	
	/*$friends.="|james";
	$sql="update user_info set user_friend ='$friends' where id=1";
	$rese=$db->execute_insert_updata($sql);*/
	if($friends==""){
		$mes="暂无好友";
	}else{
		$mes="";
	}

	
?>
<html>
	<head>
	<title>主页</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
		<style>
			
		</style>
		<script type="text/javascript">
			function showAdd(){
					document.getElementById("button").style.display="none";
					document.getElementById("button_").style.display="block";
					document.getElementById("frameOne").style.display="block";
			}
		</script>
	</head>
<iframe src="./common/head.html" width ="100%" height ="62px" name = "head"  scrolling="no" frameborder="no"></iframe>
<div id="friendList"><!--好友列表模块-->
    <a href="#" style='margin-left:30px;'>好友列表</a><br>
	<?php if($mes==""){
		
			for($i=0;$i<sizeof($friend);$i++){
			echo "<br/><a href='#'style='margin-left:20px;'>·$friend[$i]</a>";
			}
		}
		?>
</div>
<div id="selfShow">
	
	<input type ="button" value="添加新动态" style="margin-left: 85%;" id ="button" onclick="showAdd()" style="display: block;" />
	<input type ="button" value="发布" id ="button_" onclick="disAdd()" style="display: none;margin-left: 85%;" />
	<iframe src="addNew.php" id ="frameOne" width="100%" height="400px" scrolling="no" frameborder="no" style="display: none;"></iframe>
</div>

<div id="zoneSetting">
	空间信息设置
</div>
</html>