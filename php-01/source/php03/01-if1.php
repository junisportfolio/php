<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$myage = 19;
			
	// 같다면 참
	if ($myage == 19) {
		echo("<h1>19살 입니다.</h1>");
	}
			
	// 다르다면 참
	if ($myage != 20) {
		echo("<h1>20살이 아닙니다.</h1>");
	}
?>
