<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
//기능을 확인하기 위한 문자열의 선언
$url = "http://www.ITPAPER.CO.KR/index.php";
$msg = "안녕하세요. PHP";
echo("<p>문자열1 : ".$url."</p>");
echo("<p>문자열2 : ".$msg."</p>");

//인코딩 형식에 따른 문자열의 길이를 리턴한다.
$mblen1 = mb_strlen($url);
$mblen2 = mb_strlen($msg);
echo("<p>문자열1의 길이 : ".$mblen1."</p>");
echo("<p>문자열2의 길이 : ".$mblen2."</p>");

//파라미터로 전달된 글자가 처음 나타나는 위치를 리턴한다.
$position1 = mb_strpos($msg, "PHP");
echo("<p>'PHP'가 처음 나타나는 위치 : ".$position1."</p>");

//파라미터로 전달된 글자가 마지막으로 나타나는 위치를 리턴한다.
//단 이 위치를 문자열의 끝에서 부터 세는 것이 아니라,
//문자열의 처음부터 센다.
$position2 = mb_strrpos($msg, "PHP");
echo("<p>'PHP'의 마지막 위치 : ".$position2."</p>");

//모든 글자를 대문자로 변환한다.
$up = mb_strtoupper($url);
echo("<p>모든 글자의 대문자 변환 : ".$up."</p>");

//모든 글자를 소문자로 변환한다.
$low = mb_strtolower($url);
echo("<p>모든 글자의 소문자 변환 : ".$low."</p>");

?>



