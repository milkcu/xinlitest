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
  <div class="question"> <span><span class="n">7/10</span>如果你能在早上6点起床温习功课。晚间便有更多时间，令你做事更有效率。你会 </span> </div>
  <div class="option">
    <form action="page8.php" method="post">
      <input type="hidden" name="grade" value="<?=$value1?>" />
      <input type="submit" name="btngrade" value="虽然有闹钟但还是赖床不起" />
    </form>
    <form action="page8.php" method="post">
      <input type="hidden" name="grade" value="<?=$value2?>" />
      <input type="submit" name="btngrade" value="把闹钟调到5时半准时起" />
    </form>
    <form action="page8.php" method="post">
      <input type="hidden" name="grade" value="<?=$value3?>" />
      <input type="submit" name="btngrade" value="不起，睡眠比温习更重要" />
    </form>
  </div>
</div>
</body>
</html>