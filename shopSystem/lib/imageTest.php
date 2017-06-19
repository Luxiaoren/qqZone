<?php
header("Content-type:text/html;charset=utf-8");
function fun(){
$im = imagecreatetruecolor(400, 300);

$red=imagecolorallocate($im, 255, 0, 0);

imageellipse($im, 100, 100, 100, 100, $red);

header("content-type:image/png");
imagepng($im);
imagedestroy($im);
}


?>

<html>
<input type="text"/>
<img src="http://localhost/phpdemo/shopSystem/lib/image.func.php" alt="">
</html>
	


