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
  <div class="question"> <span><span class="n">10/10</span>朋友想跟你通宵看录像带，但你需要明早7时起床做兼职，你会 </span> </div>
  <div class="option">
    <form action="result.php" method="post">
      <input type="hidden" name="grade" value="<?=$value1?>" />
      <input type="submit" name="btngrade" value="看到晚上9时半回家睡觉" />
    </form>
    <form action="result.php" method="post">
      <input type="hidden" name="grade" value="<?=$value2?>" />
      <input type="submit" name="btngrade" value="视情绪而定，要是太疲倦就告假" />
    </form>
    <form action="result.php" method="post">
      <input type="hidden" name="grade" value="<?=$value3?>" />
      <input type="submit" name="btngrade" value="看通宵，然后倒头大睡" />
    </form>
  </div>
</div>
</body>
</html>