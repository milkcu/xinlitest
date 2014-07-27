<?php
	$session_key=$_POST['session_key'];
	$userId_key=$_POST['userId'];
	require_once '../class/RenrenRestApiService.class.php';
	$aid=0;    //上传的相册id（默认0，是应用相册）
	$img_src="../merge/". $userId_key. "_upload.jpg";
	$description="上传相册";
	$isPublish=1;
	$restApi = new RenrenRestApiService;
	if($isPublish==1)
	{
		preg_match('|\.(\w+)$|', $img_src, $ext);
		#转化成小写
		$ext = strtolower($ext[1]);
		$myfile=array('upload'=>array(
		'name'=>'your.'.$ext,
		'tmp_name'=>$img_src,//如果是服务器本地图片，可以这么写：'tmp_name'=>'c:/pic.jpg'
		'type'=>'image/'.$ext
		));
		$params = array('aid'=>$aid,'caption'=>$description,'session_key'=>$session_key);
		$res = $restApi->rr_photo_post_fopen('photos.upload',$params,$myfile);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0.5;url=http://q184324224.hk.tuidc.com/xinlitest/page/result2.php">
<title>无标题文档</title>
</head>

<body>
<h2>上传成功，返回ing...</h2>
</body>
</html>