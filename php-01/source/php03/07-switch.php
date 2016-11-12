<?php
	header("Content-Type: text/html; charset=UTF-8");
	
	$grade = "B";

	switch ($grade) {
	case "A":
		echo("<h1>91~100점 사이 입니다.</h1>");
		break;
	case "B":
		echo("<h1>81~90점 사이 입니다.</h1>");
		break;
	case "C":
		echo("<h1>71~80점 사이 입니다.</h1>");
		break;
	default:
		echo("<h1>70점 이하 입니다.</h1>");
		break;
	}
?>
