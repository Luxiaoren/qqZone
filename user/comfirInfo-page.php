<?php
require_once '../data/dbhelper.php';
$username=$_POST['username'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$idcard=$_POST['idcard'];
$birth=$_POST['birth'];
$telno=$_POST['telno'];


session_start();
$id=$_SESSION['id'];
$_SESSION['username']=$username;

$db=new dbhelper();

$sql="update user_info set user_name='$username',username='$name', user_idcard='$idcard',user_sex='$sex',user_birth='$birth',user_telno='$telno' where user_id=$id";
$res=$db->execute_insert_updata($sql);

$sql="update user_log set username='$username' where id=$id";
$res=$db->execute_insert_updata($sql);

$db->close();
header("Location:perCenter.php");
