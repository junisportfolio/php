<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php

$msg = "안녕하세요. <PHP> & <MySQL>프로그래밍 입니다. \n<PHP>는 훌륭한 웹 프로그래밍 언어 입니다.";
echo($msg);
echo("<hr />");

$html = htmlspecialchars($msg);
echo($html);
echo("<hr />");

$html2 = nl2br($html);
echo($html2);

?>