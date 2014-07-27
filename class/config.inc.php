<?php
	$config				= new stdClass;
	$config->APIURL		= 'http://api.renren.com/restserver.do'; //RenRen网的API调用地址，不需要修改
	$config->APPID		= '208732';	//你的API Key，请自行申请
	$config->APIKey		= 'b8889b7f6c7c4304add0dadf9b679a0f';	//你的API Key，请自行申请
	$config->SecretKey	= 'e2d73997bb9344d8a9df8c375a33ff82';	//你的API 密钥
	$config->APIVersion	= '1.0';	//当前API的版本号，不需要修改
	$config->decodeFormat	= 'json';	//默认的返回格式，根据实际情况修改，支持：json,xml
	$config->redirecturi= 'http://apps.renren.com/xinlitest/';//授权成功之后的跳转地址
	$config->scope='publish_feed,photo_upload';
?>