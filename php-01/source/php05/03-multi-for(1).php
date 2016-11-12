<?php
	header("Content-Type: text/html; charset=UTF-8");		
	
	for ($i=2; $i<=9; $i++) {
				
		echo("<h1>".$i."단</h1><ul>");
				
		for ($j=1; $j<10; $j++) {
			$k = $i*$j;
			$result = $i." x ".$j." = ".$k;
			echo("<li>".$result."</li>");
		}
				
		echo("</ul>");
	}
?>

