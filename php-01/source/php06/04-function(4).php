<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	// 파라미터를 갖는 함수의 선언
	function f($x, $y) {
		$z = $x + $y;
		
		// 값이 10보다 작을 경우, 실행중단
		if ($z < 10) {
			return;
		}
				
		return $z;
	}
			
	// 함수의 호출 --> 파라미터를 전달한다.
	$a = f(2, 1);
	$b = f(5, 7);
	$c = f(10, 5);
			
	echo("<h1>".$a."</h1>");
	echo("<h1>".$b."</h1>");
	echo("<h1>".$c."</h1>");
?>