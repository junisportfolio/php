<? header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
include_once('../inc/helper.php');
include_once('../inc/db_helper.php');
/* DB 접속하기*/
db_open();
/* SQL 처리하기*/
$sql = "SELECT count(studno) FROM student WHERE grade=4";

//SQL문 실행하기
$result = mysqli_query($_DB, $sql);

//실행결과 점검하기
if(mysqli_errno($_DB)){
    printf('<h1>MySQL SQL Fail : %s</h1>', mysqli_error($_DB));
    db_colse();
    exit();
}

/* 결과 출력하기*/
//영향을 받은 행의 수
$row = mysqli_fetch_row($result);
$count = $row[0];
printf("<h1>4학년 학생은 %d명 입니다.</h1>", $count);

/*DB 접속 해제*/
db_close();

?>