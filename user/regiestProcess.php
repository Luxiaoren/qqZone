<?php

header("Content-type:text/html;charset=utf-8");
require_once '../data/dbhelper.php'

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$idcard=$_POST['idcard'];
$sex=$_POST['sex'];
$birth=$_POST['birth'];
$telno=$_POST['telno'];

$db =new dbhelper();

$sql="";
$res=$db->execute_insert_updata($sql);


echo $idcard;


?>