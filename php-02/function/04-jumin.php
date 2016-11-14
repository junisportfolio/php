<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
$jumin = "8001151000123   ";
$jumin = trim($jumin);

$yy = mb_substr($jumin, 0, 2);
$mm = mb_substr($jumin, 2, 2);
$dd = mb_substr($jumin, 4, 2);
$gencode = mb_substr($jumin, 6, 1);
$gender = "남자";

if($gencode == '1' || $gencode == '2'){
    $yy = sprintf('19%s', $yy);
}else{
    $yy = sprintf('20%s', $yy);
}

if($gencode == '2' || $gencode == '4'){
    $gender = "여자";
}

printf("<h1>%s년%s월%s일-%s</h1>", $yy, $mm, $dd, $gender);

?>