<?php
	header("Content-Type: text/html; charset=UTF-8");

	// 파라미터를 갖는 함수의 선언
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}

	function printResult($x, $y) {
		// (우변) sum 함수를 호출하여 결과를 리턴받았다.
		// (좌변) 리턴받은 결과를 result에 대입하였다.
		$result = sum($x, $y);
		echo("<h1>".$result."</h1>");
	}

	// 함수의 호출 --> 파라미터를 전달한다.
	printResult(7, 10);
?>
