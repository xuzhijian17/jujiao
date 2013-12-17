<?php

function gd2($x,$y,$str=''){
	header("content-type:image/gif");
	session_start();

	$im = imagecreatetruecolor($x, $y);
	$bg = imagecolorallocate($im,rand(250,255), rand(250,255), rand(250,255)); //设置背景色

	imagefill($im, 0, 0, $bg); //以坐标0,0处的颜色开始填充背景色
	

	$str = substr(str_shuffle(sha1(rand())),10,4);
	$_SESSION['code'] = $str;

	$fontcolor = imagecolorallocate($im, rand(1,150), rand(1,150), rand(1,150)); //设置随机数内容颜色
	//imagestring($im, 5, rand(0,$x-35), rand(0,$y-20), $str, $fontcolor); //生成随机数
	imagettftext($im, rand(15,20), 0, rand(0,20), rand(20,$y), $fontcolor, "comic.ttf", $str); //可导入中文ttf字体输出中文
	/*
	for ($i=0; $i <200 ; $i++) { //默认100点
		$pixelcolor = imagecolorallocate($im, rand(1,255), rand(1,255), rand(1,255)); //设置随机点内容颜色
		imagesetpixel($im, rand(0,$x), rand(0,$y), $pixelcolor); //生成随机点
	}
	for ($i=0; $i <3 ; $i++) { //默认3条线
		$linelcolor = imagecolorallocate($im, rand(1,255), rand(1,255), rand(1,255)); //设置随机线内容颜色
		imageline($im, rand(0,$x), rand(0,$y), rand(0,$x), rand(0,$y), $linelcolor); //生成随机线
	}
	*/
	for ($i=0; $i <3 ; $i++) { 
		imagesetthickness($im, rand(2,3)); //设定画线的宽度
		imagefilledarc($im, rand(0,$x), rand(0,$y), rand(0,$x), rand(0,$y), rand(0,360), rand(0,360), $fontcolor, IMG_ARC_NOFILL);
	}
	
	imagegif($im);
	imagedestroy($im);
}
gd2(75,25);
?>