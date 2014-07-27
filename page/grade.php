<?php
	$fgrade=$grade*3.3;
	if(($grade >= 10) && ($grade <= 18)){
		$note = "WO的最终得分为". $fgrade."分";
		$note2 = "你并非缺乏意志力，只不过你只喜欢做那些你有兴趣的事，对于那些能即时获得满足感的工作，你会毫无困难地坚持下去。你很想坚持你的新年大计，可惜很少能坚持到底。";
		echo "<div id=\"iframe\"><iframe src=\"../createimg/create1.php\"><iframe></div>";    //服务器性能有限，将其注释掉
	}
	if(($grade) >= 19 && ($grade <= 24)){
		$note = "WO的最终得分为". $fgrade."分";
		$note2 = "你很懂得权衡轻重，知道什么时候要坚持到底，什么时候要轻松一下。你是那种坚守本分的人，但遇到极感兴趣的东西时，你的好玩心会战胜你的决心。";
		echo "<div id=\"iframe\"><iframe src=\"../createimg/create2.php\"></iframe></div>";
	}
	if(($grade >= 25) && ($grade <= 30)){
		$note = "WO的最终得分为". $fgrade."分";
		$note2 = "你的意志力惊人，不论任何人、任何情形都不会使你改变主意；但有时太执着并非好事，尝试偶尔改变一下，生活将会更充满趣味。";
		echo "<div id=\"iframe\"><iframe src=\"../createimg/create3.php\"></iframe></div>";
	}
?>
