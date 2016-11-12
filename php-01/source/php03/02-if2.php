<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$myage = 19;
			
	if ($myage > 19) {
		echo("<h1>성인입니다.</h1>");
	}
			
	if ($myage <= 19) {
		echo("<h1>학생입니다.</h1>");
	}
?>
