<?php

header("Content-Type: text/html; charset=UTF-8");

$sum = 0;

$i = 1;
while($i <= 100){
    $sum += $i;
    $i++;
}
echo("<p>1부터 100까지의 합은 ".$sum."입니다.</p>");

$i = 1;
while($i<10){
    $j = 7 * $i;
    echo("<p>7 x ".$i." = ".$j."</p>");
    $i++;
}


?>
