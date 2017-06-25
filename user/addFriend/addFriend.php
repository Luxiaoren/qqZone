<?php
header("Content-type:text/html;charset=utf-8");
require_once '../../data/dbhelper.php';


if($_COOKIE['user_name_str']==""){
$db = new dbhelper();

$sql = "select count(*) from user_info";
$res = $db -> execute_select($sql);//查询用户的条数

$num = $res[0];//将条数赋值给$num

$user_id = Array();//设置存储随机产生推荐好友的id的数组

//echo "<br>".$user_id; //测试随机数产生

$n = $num > 5 ? 5 : $num;//设置产生随机好友的个数

$i = 1;

//产生随机推荐好友的id
while(count($user_id) < $n + 1){
	
	$x = rand(1,$n);
	$user_id[0] = 1;
	if($i != 1){
		//去重
		for($j = 1;$j <= count($user_id);$j ++){
			if($user_id[$j] == $x){
				$user_id[0] = 0;
				break;
			}
		}
		if($user_id[0]){
			$user_id[$i] = $x;
			$i += 1;
		}
	}else{
		$user_id[$i] = $x;
		$i += 1;
	}	
}
//print_r($user_id);//测试

//查询随机产生推荐好友id所对应的用户名
$sql = "";
$user_name = array();
for($i = 1;$i < count($user_id);$i ++){
	$sql = "select user_name from user_info where id=$user_id[$i]";
	$res = $db -> execute_select($sql);
	$user_name[$i-1] = $res[0];
}

$user_name_str=serialize($user_name);
setcookie("user_name_str","$user_name_str");
}else{
	$user_name_str=array();
	$user_name_str=$_COOKIE['user_name_str'];
	$user_name=unserialize($user_name_str);
}

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
		<div id="show">
		<?php
			for($i=0;$i<count($user_name);$i++){
				echo "<font>·</font><a href=''>$user_name[$i]</a><a href=''  style='float:right;'>+</a><br/>";
			}
		?>
		</div>
	</div>
	</body>
</html>