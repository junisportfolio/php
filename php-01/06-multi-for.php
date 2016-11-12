<?php

header("Content-Type: text/html; charset=UTF-8");



echo("<table width='80%' border='1'>");

for($i=0; $i<6; $i++){
    echo("<tr>");
    for ($j=0; $j<7; $j++){
        $txt = "(".$i.",".$j.")";
        echo("<td>".$txt."</td>");
    }
    echo("</tr>");
}
echo("</table>");


?>
