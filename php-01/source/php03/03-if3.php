<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$point = 75;
			
	// AND(&&) --> 두 조건이 모두 참이어야 전체가 참
	if ($point > 70 && $point <= 80) {
		echo("<h1>C학점 입니다.</h1>");
	}
			
	// OR(||) --> 두 조건중 하나라도 참이면 전체가 참
	if ($point <= 70 || $point > 80) {
		echo("<h1>범위를 벗어났습니다.</h1>");
	}
?>
