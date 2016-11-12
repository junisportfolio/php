<?php
	header("Content-Type: text/html; charset=UTF-8");

	$is_korean = true;

	if ($is_korean == true) {
		echo("<h1>한국사람입니다.</h1>");
	}

	if ($is_korean == false) {
		echo("<h1>한국사람이 아닙니다.</h1>");
	}

	if ($is_korean) {	// 값 자체가 참이므로 성립된다.
		echo("<h1>한국사람입니다.</h1>");
	}

	if (!$is_korean) {	// "!"는 값을 부정한다. 참을 부정하므로 거짓
		echo("<h1>한국사람이 아닙니다.</h1>");
	}

	$is_japanese = false;

	if ($is_japanese != true) {
		echo("<h1>일본사람이 아닙니다.</h1>");
	}

	if ($is_japanese != false) {
		echo("<h1>일본사람 입니다.</h1>");
	}

	if ($is_japanese) {	// 값 자체가 거짓이므로 성립되지 않는다.
		echo("<h1>일본사람이 아닙니다.</h1>");
	}

	if (!$is_japanese) {	// 거짓을 부정하였으므로 참이다.
		echo("<h1>일본사람 입니다.</h1>");
	}
?>
