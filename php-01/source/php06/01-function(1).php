<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	// 함수의 선언
	function sayHello() {
		echo("<h1>Hello PHP.</h1>");
		echo("<h1>안녕하세요 PHP.</h1>");
	}
			
	// 함수의 호출 (여러 번 재사용 할 수 있다.)
	sayHello();
	sayHello();
?>