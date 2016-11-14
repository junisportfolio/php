<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
//기능을 확인하기 위한 문자열의 선언
$url = "http://www.ITPAPER.CO.KR/index.php";
echo("<p>문자열1 : ".$url."</p>");

//도메인 얻기
$p1 = mb_strpos($url, "/", 7);
$domain = mb_substr($url, 7, $p1-7);
echo("<h1>도메인: ".$domain."</h1>");

//파일이름 얻기
$p2 = mb_strrpos($url, "/");
$p3 = mb_strrpos($url, ".");
$file = mb_substr($url, $p2+1, $p3-($p2+1));
echo("<h1>파일이름: ".$file."</h1>");

$p4 = mb_strrpos($url, ".");
$ext = mb_substr($url, $p4+1);
echo("<h1>확장자: ".$ext."</h1>")

?>



