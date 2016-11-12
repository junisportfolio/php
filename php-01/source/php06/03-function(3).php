<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	// 파라미터를 갖는 함수의 선언
	function f($x, $y) {
		$z = $x + $y;
		echo("<h1>".$z."</h1>");
	}
			
	// 함수의 호출 --> 파라미터를 전달한다.
	f(2, 1);
	f(5, 7);
	f(10, 5);
?>