<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	$grade = $_POST['grade'];
	$value1 = $grade + 1;
	$value2 = $grade + 2;
	$value3 = $grade + 3;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../base.css" />
</head>
<body>
<div class="content">
  <div class="question"> <span><span class="n">4/10</span>你正努力储钱准备年底去旅行，但你看到了一条很适合与他（她）约会时穿的衣服。你会 </span> </div>
  <div class="option">
    <form action="page5.php" method="post">
      <input type="hidden" name="grade" value="<?=$value1?>" />
      <input type="submit" name="btngrade" value="装作没看到一直到约会结束" />
    </form>
    <form action="page5.php" method="post">
      <input type="hidden" name="grade" value="<?=$value2?>" />
      <input type="submit" name="btngrade" value="不顾一切买下它" />
    </form>
    <form action="page5.php" method="post">
      <input type="hidden" name="grade" value="<?=$value3?>" />
      <input type="submit" name="btngrade" value="为了旅游放弃" />
    </form>
  </div>
</div>
</body>
</html>