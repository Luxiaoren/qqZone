<?php

header("Content-type: text/html; charset=utf-8"); 
require_once 'string.func.php';
//通过GD库
function verifyImage($type=1,$lenght=4,$sess_name="verify"){
session_start();
$width=80;
$height=40;

$image=imagecreatetruecolor($width, $height);
$white=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);

imagefilledrectangle($image,1,0, $width-2, $height-2, $white);
$chars=buildRandomString($type, $lenght);
echo $chars;
echo"nono";
$_SESSION[$sess_name]=$chars;
$fontfiles=array("SIMYOU.TTF","STKAITI.TTF","STLITI.TTF","STXINWEI.TTF");
$pixel=true;
for($i=0;$i<$lenght;$i++){
    $size=mt_rand(14,18);
    $angle=mt_rand(-15,15);
    $x=5+$i*$size;
    $y=mt_rand(20,26);
    $fontfile="../fonts/".$fontfiles[mt_rand(0, count($fontfiles)-1)];
    $color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200),mt_rand(90,180));
    $text=substr($chars,$i,1);
    imagettftext($image,$size,$angle,$x,$y,$color,$fontfile,$text);
}

/* 
 */ob_clean(); 
header("content-type:image/png");
imagegif($image);
imagedestroy($image);

}






