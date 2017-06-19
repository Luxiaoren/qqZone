<?php

header("Content-type:text/html;charset=utf-8");
require_once '../data/dbhelper.php';
$username=$_POST['username'];
$password=$_POST['password'];

if($username==""||$password=="")
{
	header("Location:login.php?error=3");
	die();
}

 $dbhelper = new dbhelper();

$sql="select *from user_log where username='$username'";
echo $sql;
//$sql ="insert into user_log(username,password)value('lxr2','111','2@qq.com')";

$res=$dbhelper->execute_select($sql);

if($res==null){
	header("Location:login.php?error=1");
}else{
	if($res[2]==$password){
		session_start();
		$_SESSION['username']=$res[1];
		$_SESSION['password']=$res[2];
		$_SESSION['email']=$res[3];
		header("Location:mainShow.php");
	}else{
		header("Location:login.php?error=2");
	}
}






