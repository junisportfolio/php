<?php
	header("Content-Type: text/html; charset=UTF-8");

	$sum = 0;

	// i값이 1부터 100까지 증가하는 동안,
	// i의 값을 sum에 누적한다.
	for ($i=1; $i<=100; $i++) {
		// 결과값 누적
		$sum += $i;
	}

	echo("<h1>1부터 100까지의 합은 ".$sum."입니다.</h1>");
?>
