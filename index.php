<?php
	header('P3P:CP="CAO PSA OUR"');
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="base.css" />
<link href="wtb_styles/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
	$xn_sig_added = $_GET["xn_sig_added"];
	if($xn_sig_added==0)
	{
		//跳转到授权页面
		$url="http://q184324224.hk.tuidc.com/xinlitest/auth.php";
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>";
	}
	else
	{
		//跳转到主页面
		$session_key = $_GET["xn_sig_session_key"];
		$_SESSION["session_key"]=$session_key;
		
		$url="http://q184324224.hk.tuidc.com/xinlitest/main.php";
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url'"; 
		echo "</script>";
	}
?>
<div class="content"> </div>
<div class="hidden"> 
  <script src="http://s22.cnzz.com/stat.php?id=4541649&web_id=4541649" language="JavaScript"></script> <!--cnzz站长统计--> 
</div>
</body>
</html>