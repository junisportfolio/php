<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	function f($x) {
		$y = $x + 1;
		echo("<h1>".$y."</h1>");
	}
			
	// 함수의 호출 --> 파라미터를 전달한다.
	f(2);
	f(5);
	f(10);
?>
