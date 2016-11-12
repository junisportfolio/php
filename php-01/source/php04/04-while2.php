<?php
	header("Content-Type: text/html; charset=UTF-8");

	$i = 1;
	while($i<10) {
		$j = 7 * $i;
		echo("<p>7 x ".$i." = ".$j."<p>");
		$i++;	
	}
?>
