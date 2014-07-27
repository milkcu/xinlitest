<?php
	header('P3P:CP="CAO PSA OUR"');
	session_start();
	require_once '../class/RenrenRestApiService.class.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$grade = $_POST['grade'];
	require 'grade.php';
	$restApi = new RenrenRestApiService;
	$session_key=$_SESSION["session_key"];
	$params = array('fields'=>'uid,name,sex,birthday,mainurl,hometown_location,university_history,tinyurl,headurl','session_key'=>$session_key);
	$res = $restApi->rr_post_curl('users.getInfo', $params);
	$userId = $res[0]["uid"];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="../dialog/renren.js"></script>
<script type="text/javascript" src="../result.js"></script>
<link rel="stylesheet" type="text/css" href="../base.css" />
</head>
<body>

<!--发布新鲜事BEGIN-->
<div class="iframe">
  <form>
    <input type="hidden" value="<?=$note2?>" id="description" />
    <input type="hidden" value="<?=$note?>" id="message" />
  </form>
</div>
<script type="text/javascript">
	function sendFeed() {
		var title="心理测试结果";
		var description=document.getElementById("description").value;
		var image="http://q184324224.hk.tuidc.com/xinlitest/imgs/logo.jpg";
		var url="http://apps.renren.com/xinlitest";
		var message=document.getElementById("message").value;
		var action_name="进入心理测试";
		var action_link="http://apps.renren.com/xinlitest/";
		//var redirect_uri=document.getElementById("redirect_uri").value;
		var style={
			  top:100,
			  left:100,
			  height:400,
			  width:500
	  };/*用于设置弹层的位置和大小*/
		var uiOpts = {
		  url : "feed",
		  display : "iframe",
		  method : "post",
		  params : {
		    "url":url,
		    "name":title,
		    "description":description,
		    "image":image,
			"message":message,
			"action_name":action_name,
			"action_link":action_link
		  },
		  //style : style,
		  onSuccess: function(r){/*alert("success!");*/},
		  onFailure: function(r){/*alert("fail");document.getElementById("ttt").value="111";*/} 
	  };
	  Renren.ui(uiOpts);
	}
</script> 
<script type="text/javascript">Renren.init({appId:<?=$config->APPID?>});</script> 
<!--发布新鲜事END--> 

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

<!--上传相册BEGIN--> 
<script type="text/javascript">
	function uploadPhoto(){
		window.location.href="upload.php";
	}
	</script> 
<!--上传相册ENG-->

<div class="content">
  <div class="question"> <span id="result">
    <?=$note?>
    </span>
    <div> 
      <!--人人喜欢BEGIN--> 
      <script type="text/javascript" charset="utf-8">
		  (function(){
			  var p = [], w=210, h=65,
			  lk = {
			  url:'http://apps.renren.com/xinlitest'||location.href, /*喜欢的URL(不含如分页等无关参数)*/
			  title:'心理测试'||document.title, /*喜欢标题(可选)*/
			  description:'全方位，零距离，有你有我有他', /*喜欢简介(可选)*/
			  image:'http://q184324224.hk.tuidc.com/xinlitest/imgs/logo.jpg' /*喜欢相关图片的路径(可选)*/
			  };
			  for(var i in lk){
			  p.push(i + '=' + encodeURIComponent(lk[i]||''));
			  }
			  document.write('<iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://www.connect.renren.com/like/v2?'+p.join('&')+'" style="width:'+w+'px;height:'+h+'px;"></iframe>');
		  })();
</script> 
      <!--人人喜欢END--> 
    </div>
  </div>
  <div class="option">
    <form>
      <input type="button" value="精确解析，发布新鲜事" onclick="sendFeed()" />
    </form>
    <form action="result.php" method="post">
      <input type="button" value="邀请好友，测测更健康" onclick="sendRequest()" />
    </form>
    <form action="../createimg/upload.php" method="post">
      <input type="hidden" name="session_key" value=<?=$session_key?> />
      <input type="hidden" name="userId" value=<?=$userId?> />
      <input type="submit" value="合影留念，保存至相册" />
    </form>
  </div>
</div>
</body>
</html>