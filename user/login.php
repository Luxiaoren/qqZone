

<html>
	
	<title>用户登录</title>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
			#login{
					margin:200px auto;
					border:0px silvery solid;
			}

		</style>
	</head>
		<form action ="logProcess.php" method="post" id="userlog" autocomplete="off">
			<table id="login" >
				<tr ><td>用户名:</td><td><input type ="text" name = "username" value=""/></td></tr>
				<tr><td>密&nbsp;&nbsp;&nbsp;码:</td><td><input type = "password" name="password" value=""/></td></tr>
				<input style="display:none" type="text" name="username"/>
				<input style="display:none" type="password" name="password"/>
				<tr><td><input type ="submit" name="Submit" value="登录" /></td><td><input type = "button" name ="regiest" value="注册" onclick="window.location.href='regiest.php'" /></td></tr>
			</table>
		</form>	
		<?php
			if(!empty($_GET['error'])){
				$error=$_GET['error'];
				if($error==1){
					echo "
							<div>
								没有此用户名；
							</div>
					";
				}else if($error==2){
					echo "
							<div>
								密码错误；
							</div>
					";
				}else if($error==3){
					echo"
						<div>
							用户名或者密码不能为空；
						</div>

					";
				}
			}
		?>
	<body>
	</body>
</html>