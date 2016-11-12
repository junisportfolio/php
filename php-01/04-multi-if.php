<?php

header("Content-Type: text/html; charset=UTF-8");

$point = 78;
if($point > 70 && $point <= 80){
    if($point > 77){
        echo("<p>C+ 입니다.</p>");
    }else if ($point<74){
        echo("<p>C- 입니다</p>");
    }else {
        echo("<p>C- 입니다</p>");
    }
}

$sum1 = 0;
$sum2 = 0;

for ($i = 1; $i <=100; $i++){
    //2로 나눈 나머지가 0이면 짝수
    if($i % 2 == 0){
        $sum += $i;
    }else{
        $sum2 += $i;
    }
}

echo("<p>sum1 = ".$sum1."</p>");
echo("<p>sum2 = ".$sum2."</p>");





?>
