<?php
require_once '../data/dbhelper.php';

$db = new dbhelper();

session_start();
$username=$_SESSION['username'];

$sql="select *from user_info where user_name ='$username'";

$res =$db->execute_select($sql);

$usersex=$res[5];
$useridcard=$res[3];
$userbirth=$res[6];
$usertelno=$res[7];

if(!$username)

?>

<html>
	<head>
		<title>个人中心</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script type="text/javascript">
			function chageInfo(){
				document.getElementByTagName("input").disable="enable";
			}
		</script>
		<style type="text/css">
			

		</style>
	</head>
	
	<body>
		
		<iframe src="./common/head.html" width ="100%" height ="62px" name = "head"  scrolling="no" frameborder="no"></iframe>
		<div id="perShow">
			个人中心显示
			<table border="1px black solid;">
			<tr><td>姓名：</td><td><input type="text" name="name" value="<?php echo $username;?>" disable="disable"></td></tr>
			<tr><td>性别：</td><td><input type="radio" name="sex" value="sex"  disable="disable"><?php echo $usersex;?></td></tr>
			<tr><td>身份证号码：</td><td><input type="text" name="idcard" value="<?php echo $useridcard;?>" disable="disable"></td></tr>
			<tr><td>出生年月：</td><td><input type="text" name="birth" value="<?php echo $userbirth;?>" disable="disable"></td></tr>
			<tr><td>联系方式：</td><td><input type="text" name="telno" value="<?php echo $usertelno?>" disable="disable"></td></tr>
			<button name="button" value="sss" onclick="chageInfo()"></button>
			</table>
		</div>
	</body>
</html>