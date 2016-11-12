<? header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
include_once('../inc/helper.php');
include_once('../inc/db_helper.php');
/* DB 접속하기*/
db_open();
/* SQL 처리하기*/
$sql = "INSERT INTO department(dname, loc) VALUES ('컴퓨터정보과', '5호관')";

//SQL문 실행하기
$result = mysqli_query($_DB, $sql);

//실행결과 점검하기
if(mysqli_errno($_DB)){
    printf('<h1>MySQL SQL Fail : %s</h1>', mysqli_error($_DB));
    db_colse();
    exit();
}

/* 결과 출력하기*/
//auto_increment로 생성된 신규 일련번호
$insert_id = mysqli_insert_id($_DB);
//영향을 받은 행의 수
$num_rows = mysqli_affected_rows($_DB);

printf("<h1>New Id Value: %d</h1>", $insert_id);
printf("<h1>%d Record Insert</h1>", $num_rows);

/*DB 접속 해제*/
db_close();

?>