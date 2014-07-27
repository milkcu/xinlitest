<?php
	header('P3P:CP="CAO PSA OUR"');
	session_start();
	require_once '../class/RenrenRestApiService.class.php';
	require 'grade.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="../dialog/renren.js"></script>
<script type="text/javascript" src="../result.js"></script>
<link rel="stylesheet" type="text/css" href="../base.css" />
<style type="text/css">
</style>
</head>

<body>
<!--邀请好友BEGIN--> 
<script type="text/javascript">
	function sendRequest(){
	var style={
			  top:100,
			  left:100,
			  height:400,
			  width:500
	  };/*用于设置弹层的位置和大小*/
	var params = {
			"accept_url":"http://apps.renren.com/xinlitest/",
			"accept_label":"全方位，零距离，心理测试，看来体验吧",
			"actiontext":"童鞋们，有福同享"
		};
	var style=null;/*可以设置弹层的位置和尺寸*/
	var uiOpts = {
		url : "request",
		display : "iframe", 
	    params : params,
		//style : style,/*设置弹层的位置和尺寸*/
		onSuccess: function(r){},
		onFailure: function(r){} 
	};
	Renren.ui(uiOpts);
}
</script> 
<script type="text/javascript">Renren.init({appId:<?=$config->APPID?>});</script> 
<!--邀请好友END--> 

<div class="content">
  <div class="result2"> <span id="bless">人生没有如果，只有后果和结果。过去的不会再回来，即使回来也不再完美。生活有进退，输什么也不能输心情。生活最大的幸福就是，坚信有人爱着我。对于过去，不可忘记，但要放下。因为有明天，今天永远只是起跑线。生活简单就迷人，人心简单就幸福；学会简单其实就不简单。</span></div>
  <div class="option2">
    
    <form action="result.php" method="post">
      <input type="button" value="邀请好友，测测更健康" onclick="sendRequest()" />
    </form>
    
  </div>
</div>
</body>
</html>