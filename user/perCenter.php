<?php
require_once '../data/dbhelper.php';

$db = new dbhelper();

session_start();
$username=$_SESSION['username'];

$sql="select *from user_info where user_name ='$username'";

$res =$db->execute_select($sql);
$name=$res[3];
$usersex=$res[6];
$useridcard=$res[4];
$userbirth=$res[7];
$usertelno=$res[8];

$db->close();
if(!$username)

?>

<html>
	<head>
		<title>个人中心</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script type="text/javascript">
			function chageInfo(){
				
				
				var tag=document.getElementsByTagName("input");//获取input标签元素

				//循环改变标签里的字体颜色，显示方式，和编辑状态
				for(var i=0;i<tag.length-2;i++){
					tag[i].style.color="black";
					tag[i].style.display="inline";
					tag[i].readOnly=false;
					
				}
				
				tag[2].style.display="none";//将原先的性别显示变为不可见
				

				//显示新的性别选择
				var tag=document.getElementsByTagName("span");
				tag[0].style.display="none";
				for(var i=1;i<tag.length;i++){
					tag[i].style.display="inline";
				}



			}

			function comfirInfo(){
				var tag=document.getElementsByTagName("input");
				for(var i=0;i<tag.length;i++){
					tag[i].style.color="gray";
					tag[i].readOnly="readOnly";
				}		}
		</script>
		<style type="text/css">
		
		</style>
	</head>
	
	<body onload="">
		
		<iframe src="./common/head.html" width ="100%" height ="62px" name = "head"  scrolling="no" frameborder="no"></iframe>
		<div id="perShow">
			
			<form action="comfirInfo-page.php" method="POST">
			<table border="1px black solid;">
			<tr><td colspan="3" style="text-align: center;">个人中心显示</td></tr>
			<tr><td>用户名：</td><td colspan="3"><input type="text" id="username" name ="username" value="<?php echo $username;?>" readonly="readonly"></td></tr>
			<tr><td>姓名：</td><td colspan="3"><input type="text" id="name" 	name ="name" value="<?php echo $name;?>" readonly="readonly"></td></tr>
			<tr><td>性别：</td><td colspan="3">
				<input type="radio" name="ssex" id="ssex" value="男"  readonly="readonly" style="display: inline;" checked><span style="display: inline;"><?php echo $usersex;?></span>
				<input type="radio" name="sex" id="man" value="男" style="display: none;"><span  style="display: none;">男</span>
				<input type="radio" name="sex" id="women" value="女"  style="display: none;"><span style="display: none;">女</span>
				<input type="radio" name="sex" id="unknow" value="保密" style="display: none" checked><span style="display: none;">保密</span> 					
			</td></tr>
			

			<tr><td>身份证号码：</td><td colspan="3"><input type="text" name="idcard" id="idcard" value="<?php echo $useridcard;?>" readonly="readonly"></td></tr>
			<tr><td>出生年月：</td><td colspan="3"><input type="text" name="birth" id="birth" value="<?php echo $userbirth;?>" readonly="readonly"></td></tr>
			<tr><td>联系方式：</td><td colspan="3"><input type="text" name="telno" id="telno" value="<?php echo $usertelno?>" readonly="readonly"></td></tr>
			<tr><td><input  type ="button" name="change"  value="修改信息" style="color: black;width: 100%" onclick="chageInfo()"></td>
			<td><input  type ="submit" name="comfir"  value="确定" style="color: black;width: 100%" onclick="comfirInfo()"></td>
			<td><input type="button" name="back" value="返回" style="color: black;width: 100%;" onclick="window.location.href='mainShow.php'"></td></tr>
			
			</table>
			</form>
		</div>
	</body>
</html>