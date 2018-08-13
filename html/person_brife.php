<!DOCTYPE html>
<html>
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人简介</title>
     <style type="text/css">
	body {background-color: #00FFFF}
	h2 {background-color: transparent}
	p {background-color: rgb(250,0,255)}
	p.no2 {background-color: gray; padding: 20px;}
   </style>
</head>
 
<body>
<?php
        header("content-type:image/jpeg");
        $sourceImage = 'face_detect.jpg';
	$width = 200;
	$height = 200;
	
	$original = imagecreatefromjpeg($sourceImage);
	$dims = getimagesize($sourceImage);
//	echo $dims[0]." ".dims[1];
	
	
	$image = imagecreatetruecolor($width, $height);
	//$bgcolor = imagecolorallocate($image, 255,255,255);
	//imagefill($image,0,0,$bgcolor);
	
	
	
	//生成缩略图
	imagecopyresampled($image, $original, 0, 0, 0, 0, $width, $height, $dims[0], $dims[1]);
 
	
//	header("content-type:image/jpeg");
	imagejpeg($image);
	
	imagedestroy($image);
?>
</body>
 
</html>
