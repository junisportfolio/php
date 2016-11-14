<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php

//배열의 생성
$myarray = array("PHP", "JSP", "ASP");

echo("<h1>".$myarray[0]."</h1>");
echo("<h1>".$myarray[1]."</h1>");
echo("<h1>".$myarray[2]."</h1>");

//배열에 저장된 값 변경(할당)
$myarray[0] = "HTML";
$myarray[1] = "CSS";
$myarray[2] = "JavaScript";

echo("<h1>".$myarray[0]."</h1>");
echo("<h1>".$myarray[1]."</h1>");
echo("<h1>".$myarray[2]."</h1>");


?>