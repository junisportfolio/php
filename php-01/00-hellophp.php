<?php

header("Content-Type: text/html; charset=UTF-8");
/*

httpd.conf 세팅

DocumentRoot
가상서버 로컬위치

php.ini 세팅
short_open_tag = On
php 실행파일을 줄여서 사용가능하는 기능의 온오프
filesize = 사이즈 수정 (최대크기)
timezone = Asia/Seoul

프로토콜 = 규약
포트번호 = 항구번호

 */

echo("Hello PHP");
echo("안녕하세요. PHP");

echo("<p>Hello PHP</p>");
echo("<p>안녕하세요. PHP</p>");

/*
integer /:  정수
double : 실수

php 스타일은
one plate 에 다 담는다 -
(양식스타일)

array : 배열 - 핵심
object : 객체 - 객체지향도 지원하기에 알아두어야 한다
NULL : null - 변수는 존재하지만 아무런 값도 갖고 있지 않는 특별한 형태
*/

$num1 = 12345;

$num2 = 3.14;
$msg1 = "Hello PHP";
$msg2 = "안녕하세요. PHP";
$isMan = true;

/*
변수
$변수이름 = 값;

ex/)
$msg = '안녕하세요 .php'
*/

echo("<p>num1 =".$num1."</p>");
echo("<p>num2 =".$num2."</p>");
echo("<p>msg1 =$msg1</p>");
echo("<p>msg2 =$msg2</p>");
echo("<p>isMan =".$isMan."</p>");

/*
단항 연산자 = 축약해서 줄여쓰는 연산자 - 버카충 = 버스 카드 충전
$x = 100;
$x += 5;
값을 내고 그 값을 다시 대입하는것

증감 연산자 - ㅇㅇ 와도 같은 느낌
$a = 100;
$x = 1;
$y = a + x++; 뒷북
$y = a + ++x; 앞북

비교 연산자
true or false

*/

//사칙연산
$num1 = 100 + 30;
$num2 = 100 - 30;
$num3 = 100 * 30;
$num4 = 100 / 30;
$num5 = 100 % 30;
//연산자 우선순위
$num6 = 100 + 30 * ( 2 - 1 );

//결과출력
echo("<p>num1=".$num1."</p>");
echo("<p>num2=$num2</p>");
echo("<p>num3=$num3</p>");
echo("<p>num4=$num4</p>");
echo("<p>num5=$num5</p>");
echo("<p>num6=$num6</p>");

//단항 연산자
$x = 100;
$x = $x + 5;

echo("<p>".$x."</p>");

$x = 100;
$x += 5;

echo($x);

/*

모든 사칙연산자에 표현이 가능하다 +=, -=, *=, %=

*/

$num = 100;
$num += 5;
echo("<p>더하기".$num."</p>");
$num -= 3;
echo("<p>빼기".$num."</p>");
$num *= 5;
echo("<p>곱하기".$num."</p>");
$num /= 3;
echo("<p>나누기".$num."</p>");
$num %= 3;
echo("<p>나머지".$num."</p>");

//증감 연산자
$x = $x + 1;
$x += 1;
$x++;
++$x;

$x = $x - 1;
$x -= 1;
$x--;
--$x;

$plus_num = 1;
$plus_num = $plus_num + 1;
$plus_num += 1;
$plus_num++;
++$plus_num;

echo ("<p>\$plus_num=".$plus_num."</p>");

$minus_num = 4;
$minus_num = $minus_num - 1;
$minus_num -= 1;
$minus_num--;
--$minus_num;

echo ("<p>\$minus_num=".$minus_num."</p>");

$a = 100;
$x = 1;
$y = a + $x++;
//$y에 101 이라는 값이 대입된 후에 $x++이 계산된다.
echo("<p>\$y = $y</p>");


$a = 100;
$x = 1;
$y = a + ++$x;
//++$x가 먼저 계산되므로 $x는 2가 된다.
//$y에 100 + 2 의 결과가 대입된다.
echo("<p>\$y = $y</p>");

//비교 연산자

$num1 = 123;
$num2 = 456;

//비교 연산에 대한 결과는 boolean값이다
$result1 = $num1 == $num2; //false
$result2 = $num1 != $num2; //true
$result3 = $num1 > $num2;  //false
$result4 = $num1 <= $num2; //true


echo("<p>\$result1 = $result1</p>");
echo("<p>\$result2 = $result2</p>");
echo("<p>\$result3 = $result3</p>");
echo("<p>\$result4 = $result4</p>");

//논리 연산자 AND
$result1 = true && true; //true
$result2 = true && false; //false
$result3 = false && true; //false
$result4 = false && false; //false

echo("<p>\$result1 = $result1</p>");
echo("<p>\$result2 = $result2</p>");
echo("<p>\$result3 = $result3</p>");
echo("<p>\$result4 = $result4</p>");

//논리 연산자 OR
$result1 = true || true; //true
$result2 = true || false; //true
$result3 = false || true; //true
$result4 = false || false; //false

echo("<p>\$result1 = $result1</p>");
echo("<p>\$result2 = $result2</p>");
echo("<p>\$result3 = $result3</p>");
echo("<p>\$result4 = $result4</p>");

$a = 100;
$b = 200;
$x = 5;
$y = 3;

//논리 연산에 대한 결과는 boolean형이다
$result1 = $a != $b || $a == $b;
$result2 = $a < $b || $a > $b;
$result3 = $a < $b || $a < $b;
$result4 = $a > $b || $a > $b;
$result4 = $a > $b || $a < $b;

echo("<p>\$result1 = $result1</p>");
echo("<p>\$result2 = $result2</p>");
echo("<p>\$result3 = $result3</p>");
echo("<p>\$result4 = $result4</p>");

$r1 = $a >= $b;
$r2 = $x >= $y;

$result6 = $r1  && $r2 ;
$result7 = $r1  || $r2 ;

echo("<p>\$result6 = $result6</p>");
echo("<p>\$result7 = $result7</p>");

$success = true;
$fail = !$success;
echo("<p>\$fail = $fail</p>");




?>
