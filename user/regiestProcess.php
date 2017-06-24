<?php

header("Content-type:text/html;charset=utf-8");
require_once '../data/dbhelper.php';



$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$idcard=$_POST['idcard'];
$sex=$_POST['sex'];
$birth=$_POST['birth'];
$telno=$_POST['telno'];

setcookie("username","$username");
setcookie("password","$password");
setcookie("email","$email");
setcookie("name","$name");
setcookie("idcard","$idcard");
setcookie("birth","$birth");
setcookie("telno","$telno");

if($username==""||$password==""||$email==""){
	setcookie("error","请填写必须信息");
	header("Location:regiest.php");
	die();
}


$db =new dbhelper();

$sql="insert into user_log(username,password,email)value('$username','$password','$email')";

$res=$db->execute_insert_updata($sql);

if($res==false){
	setcookie("error","用户名已存在");
	header("Location:regiest.php");
	die();
}
elseif ($res==1) {
	setcookie("error","注册完成");
	$sql="select * from user_log where username='$username'";
	$res=$db->execute_select($sql);
	$id=$res[0];
	$sql="insert into user_info(user_id,user_name,username,user_idcard,user_sex,user_birth,user_telno) values($id,'$username','$name','$idcard','$sex','$birth','$telno') ";
	$res=$db->execute_insert_updata($sql);
	header("Location:regiest.php");
	die();
}




?>