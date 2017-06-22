<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>用户注册</title>
</head>

<body>
	<div id="regiestMain">
		<form action="regiestProcess.php" method="POST">
			<table border="1px" style="text-align: center;">
				<tr><td colspan="2">注册用户</td></tr>
				<tr><td>用户名：</td><td><input type="text" name="username"/></td></tr>
				<tr><td>密码：</td><td><input type="text" name="password"/></td></tr>
				<tr><td>邮箱：</td><td><input type="text" name="email"/></td></tr>
				<tr><td>姓名：</td><td><input type="text" name="name"/></td></tr>
				<tr><td>身份证号：</td><td><input type="text" name="idcard"/></td></tr>
				<tr><td>性别：</td><td><input type="radio" name="sex" value="男" />男
									<input type="radio" name="sex" value="女">女					
									<input type="radio" name="sex" value="保密" checked>保密</td></tr>
				<tr><td>出生年月：</td><td><input type="text" name="birth"/></td></tr>
				<tr><td>联系方式：</td><td><input type="text" name="telno"/></td></tr>
				<tr><td><input type="reset" name="reset" value="重置" style="width: 100%;"></td>
				<td><input type="submit" name="Submit" value="注册" style="width: 100%;"/></td></tr>
			</table>
		</form>
	</div>
</body>
</html>