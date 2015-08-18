<?php
$img = imagecreatetruecolor(800,300);//画图像

$bgcolor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
imagefilledrectangle($img,0,0,800,300,$bgcolor);//画背景

$line_color = imagecolorallocate($img,0,255,0);
imagerectangle($img,0,0,799,299,$line_color);//画边框

$pointcolor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
for($i=0;$i<4000;$i++){
	imagesetpixel($img,mt_rand(0,800),mt_rand(0,300),$pointcolor);
}//画点

$color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
for($i=0;$i<5;$i++){
	imagearc($img,mt_rand(0,800),mt_rand(0,300),800,300,0,mt_rand(0,180),$color);
}//画线

$str = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$content = '';

for($i=0;$i<5;$i++){
	$content = $str[mt_rand(0,strlen($str)-1)];
	$font_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imagefttext($img,200,mt_rand(0,15),50+150*$i,250,$font_color,'c:\WINDOWS\Fonts\simsun.ttc',$content);
}


imagepng($img);
imagedestroy($img);

header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");
header("Content-type: image/png;charset=utf8");