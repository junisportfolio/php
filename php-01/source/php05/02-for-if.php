<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$sum1 = 0;
	$sum2 = 0;		
	
	for ($i=1; $i<=100; $i++) {
		// 2로 나눈 나머지가 0이면 짝수
		if ($i % 2 == 0) {
			$sum1 += $i;
		} else {
			$sum2 += $i;
		}
	}

	echo("<h1>sum1=".$sum1."</h1>");
	echo("<h1>sum2=".$sum2."</h1>");
?>

