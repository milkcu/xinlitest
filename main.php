<?php
	header('P3P:CP="CAO PSA OUR"');
	session_start();
	require_once 'class/config.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="base.css" />
<script type="text/javascript" src="dialog/renren.js"></script>
</head>
<body>

<!--获得信息BEGIN-->
<?php
	require_once './class/RenrenRestApiService.class.php';
	$restApi = new RenrenRestApiService;
	$session_key=$_SESSION["session_key"];
	$params = array('fields'=>'uid,name,sex,birthday,mainurl,hometown_location,university_history,tinyurl,headurl','session_key'=>$session_key);
	$res = $restApi->rr_post_curl('users.getInfo', $params);
	$mainurl = $res[0]["mainurl"];
?>
<!--获得信息END--> 

<!--分享应用BEGIN--> 
<script type="text/javascript" src="http://widget.renren.com/js/rrshare.js"></script> 
<script type="text/javascript">
	function shareClick() {
		var resourceUrl="http://apps.renren.com/xinlitest";
		var pic='http://q184324224.hk.tuidc.com/xinlitest/imgs/logo.jpg';
		var title="心理测试";
		var description="全方位，零距离，有你有我有他";
		var message="童鞋们，有福同享哦";
		var rrShareParam = {
			resourceUrl : resourceUrl,	/*分享的资源Url*/
			pic : pic,		/*分享的主题图片Url*/
			title : title,		/*分享的标题*/
			description : description,	/*分享的详细描述*/
			message : message		/*分享的标题*/
		};
		rrShareOnclick(rrShareParam);
	}
</script> 
<!--分享应用END--> 

<!--进入测试BEGIN--> 
<script type="text/javascript">
	function exam(){
		window.location.href="page/page1.php";
	}
</script> 
<!--进入测试END--> 

<!--公共主页BEGIN--> 
<script type="text/javascript">
	function zhuye(){
		window.open("http://www.renren.com/434899280");
	}
</script> 
<!--公共主页END-->

<div class="content">
  <div class="question">
    <div id="photo"><img src="<?=$mainurl?>" height="150px" /> </div>
    <div id="title"><span id="welcome">Welcome</span> </div>
  </div>
  <div class="option">
    <form>
      <input type="button" value="进入测试" onclick="exam()" />
    </form>
    <form action="page/result.php" method="post">
      <input type="button" value="分享应用" onclick="shareClick()" />
    </form>
    <form>
      <input type="button" value="公共主页" onclick="zhuye()" />
    </form>
  </div>
</div>
</body>
</html>