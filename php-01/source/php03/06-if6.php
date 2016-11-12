<?php
	header("Content-Type: text/html; charset=UTF-8");

	$point = 82;
	
	// 임의로 비워둔 값
	$grade = null;
			
	if (90 < $point && $point <= 100) {
		$grade = "A";
	} else if (80 < $point && $point <= 90) {
		$grade = "B";
	} else if (70 < $point && $point <= 80) {
		$grade = "C";
	} else {
		$grade = "F";
	}
	
	// 문자열을 조합하여 새로운 변수에 할당		
	$msg = "<h1>".$grade."학점 입니다.</h1>";
	echo($msg);
?>
