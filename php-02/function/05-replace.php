<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php

$msg = "안녕하세요. PHP";
echo("<h1>".$msg."</h1>");

$msg1 = str_replace('안녕하세요', '반갑습니다', $msg);
echo("<h1>".$msg1."</h1>");

$msg2 = str_replace('PHP', '웹 프로그램', $msg1);
echo("<h1>".$msg2."</h1>")

?>