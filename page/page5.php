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
  <div class="question"> <span><span class="n">5/10</span>你得异性朋友要你假装他（她）的女（男）朋友陪他回家应付家长，你会 </span> </div>
  <div class="option">
    <form action="page6.php" method="post">
      <input type="hidden" name="grade" value="<?=$value1?>" />
      <input type="submit" name="btngrade" value="答应，反正只是帮忙" />
    </form>
    <form action="page6.php" method="post">
      <input type="hidden" name="grade" value="<?=$value2?>" />
      <input type="submit" name="btngrade" value="不答应，不想闹误会" />
    </form>
    <form action="page6.php" method="post">
      <input type="hidden" name="grade" value="<?=$value3?>" />
      <input type="submit" name="btngrade" value="看情况" />
    </form>
  </div>
</div>
</body>
</html>