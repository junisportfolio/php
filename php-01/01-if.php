<?php

header("Content-Type: text/html; charset=UTF-8");


/*
 * 개발자 = 자연스럽게 익혀서 잘 활용하는 것이다.
 *
 * 토큰 = 컴퓨터는 모든 코드를 한줄로 붙여서 처리하기 때문에 ; 세미콜론을 잘 챙겨줘야 한다.
 *
 * */


/* 1 */
$myage = 19;

//같다면 참
if($myage){
    echo("<p>19살 입니다.</p>");
}

//다르다면 참
if($myage != 20){
    echo("<p>20살이 아닙니다.</p>");
}

/* 2 */
if($myage > 19){
    echo("<p>성인 입니다.</p>");
}
if($myage <= 19){
    echo("<p>학생 입니다.</p>");
}

/* 3 */
$point = 75;
// AND(&&) --> 두 조건이 모두 참이어야 전제가 참
if($point > 70 && $point <= 80){
    echo("<p>C 학점 입니다.</p>");
}
// OR(||) --> 두 조건중 하나라도 참이면 전제가 참
if($point <= 70 || $point > 80){
    echo("<p>범위를 벗어났습니다</p>");
}

/* 4 */
$is_korean = true;

if($is_korean == true){
    echo("<p>한국사람입니다</p>");
}
if($is_korean == false){
    echo("<p>한국사람이 아닙니다</p>");
}
if($is_korean){
    echo("<p>한국사람입니다</p>");
}
if(!$is_korean){
    echo("<p>한국사람이 아닙니다</p>");
}


$is_japanese = false;

if($is_japanese != true){
    echo("<p>일본사람이 아닙니다</p>");
}
if($is_japanese != false){
    echo("<p>일본사람이 아닙니다</p>");
}
if($is_japanese){
    echo("<p>일본사람이 아닙니다</p>");
}
if(!$is_japanese){
    echo("<p>일본사람 입니다</p>");
}

/* 5 */
$mypage = 19;
if(mypage > 19) {
    echo("<p>성인입니다</p>");
}else{
    echo("<p>성인입니다</p>");
}

$point = 82;

$grade = null;
if(90 < $point && $point <= 100) {
    $grade = "A";
}else if(80 < $point && $point <= 90){
    $grade = "B";
}else if(70 < $point && $point <= 80){
    $grade = "C";
}else{
    $grade = "F";
}


$msg = "<p>".$grade."학점 입니다.</p>";
echo($msg);

$grade = "B";
switch($grade){
    case "A":
        echo("<p>91점~100점 사이입니</p>");
        break;
    case "B":
        echo("<p>81점~90점 사이입니다</p>");
        break;
    case "C":
        echo("<p>71점~80점 사이입니다</p>");
        break;
    default:
        echo("<p>70점 이하 입니다.</p>");
        break;
}





?>
