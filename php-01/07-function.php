<?php

header("Content-Type: text/html; charset=UTF-8");

/*
 *
 * php는 함수기반 언어이다
 *
 */

//선언한다
function sayHello(){
    echo("<p>Hello PHP.</p>");
    echo("<p>안녕하세요 php</p>");
}

//호출한다
sayHello();


//파라미터(매개변수를 받는다)
function f($x){
    $y = $x + 1;
    echo("<p>".$y."</p>");
}

f(2);
f(5);
f(10);

function x($x, $y){
    $z= $x + $y;
    echo("<p>".$z."</p>");
}

//함수의 호출 --> 파라미터를 전달한다
x(2,1);
x(5,7);
x(10,5);


function v($x, $y){
    $z = $x + $y;

    //값이 10보다 작을경우 실행중단
    if($z < 10){
        return;
    }
    return $z;
}
echo("asdasd");
$a = v(2,1);
$b = v(5,7);
$c = v(10,5);

echo("<p>".$a."</p>");
echo("<p>".$b."</p>");
echo("<p>".$c."</p>");

function sum($x, $y){
    $z = $x + $y;
    return $z;
}
function printResult($x, $y){
    //(우변) sum 함수를 호출하여 결과를 리턴받았다.
    //(좌변) 리턴받은 결과를 result에 대입하였다.
    $result = sum ($x, $y);
    echo("<p>".$result."</p>");
}

printResult(7,10);






?>
