<?php
	header("Content-Type: text/html; charset=UTF-8");

	for ($i=1; $i<10; $i++) {
		$j = 7 * $i;
		echo("<p>7 x ".$i." = ".$j."<p>");	
	}
?>
