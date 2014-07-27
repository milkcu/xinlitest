<?php
/*人人接口BEGIN*/
	header('P3P:CP="CAO PSA OUR"');
	session_start();
	require_once '../class/RenrenRestApiService.class.php';
	$session_key=$_SESSION["session_key"];
	$restApi = new RenrenRestApiService;
	$params = array('fields'=>'uid,name,sex,birthday,mainurl,hometown_location,university_history,tinyurl,headurl','session_key'=>$session_key);
	$res = $restApi->rr_post_curl('users.getInfo', $params);
	$userId = $res[0]["uid"];
	$mainurl = $res[0]["mainurl"];
/*人人接口END*/

/*调整头像尺寸BEGIN*/
	$imgsrc = $mainurl;
	$width=190;
	$height=190;
	resizejpg($imgsrc,$imgdst,$width,$height,$userId);
	function resizejpg($imgsrc,$imgdst,$imgwidth,$imgheight,$userId)
	{ 
		//$imgsrc jpg格式图像路径 $imgdst jpg格式图像保存文件名 $imgwidth要改变的宽度 $imgheight要改变的高度
		$arr = getimagesize($imgsrc);                     
		header("Content-type: image/jpg");
		
		$imgWidth = $imgwidth;
		$imgHeight = $imgheight;
		$imgsrc = imagecreatefromjpeg($imgsrc);
		$image = imagecreatetruecolor($imgWidth, $imgHeight);  //创建一个彩色的底图
		imagecopyresampled($image, $imgsrc, 0, 0, 0, 0,$imgWidth,$imgHeight,$arr[0], $arr[1]);
		imagejpeg($image, '../merge/'. $userId.'_resize.jpg', 50);
	}
/*调整头像尺寸END*/


/*合并图片BEGIN*/
	$watermark = imagecreatefromjpeg($userId."_resize.jpg");	
	$watermark_width = imagesx($watermark);   
	$watermark_height = imagesy($watermark);   
	$image = imagecreatetruecolor($watermark_width, $watermark_height);   
	$image = imagecreatefromjpeg('../imgs/bg1.jpg');   
	$size = getimagesize('../imgs/bg1.jpg');   
	$dest_x = 30;   
	$dest_y = 30;   
	header('content-type: image/jpeg');
	imagecopymerge($image, $watermark, $dest_x, $dest_y, 0,0, $watermark_width, $watermark_height, 100);   
	imagejpeg($image, '../merge/'. $userId. '_upload.jpg', 50);   
	imagedestroy($image);   
	imagedestroy($watermark);  
/*合并图片END*/
?>
