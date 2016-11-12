<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	$point = 78;
			
	if ($point > 70 && $point <= 80) {
		if ($point > 77) {
			echo("<h1>C+ 입니다.</h1>");
		} else if ($point < 74) {
			echo("<h1>C- 입니다.</h1>");
		} else {
			echo("<h1>C0 입니다.</h1>");
		}
	}
?>
