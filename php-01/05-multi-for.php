<?php

header("Content-Type: text/html; charset=UTF-8");


for($i=2; $i<=9; $i++){
    echo("<p>".$i."단</p><ul>");
    for ($j=1; $j<10; $j++){
        $k = $i*$j;
        $result = $i." x ".$j." = ".$k;
        echo("<li>".$result."</li>");
    }
    echo("</ul>");
}



?>
