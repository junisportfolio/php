<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
    //데이터베이스에 접속하기 위한 정보 정의하기
$db_hostname = "localhost";
$db_database = "myschool";
$db_username = "root";
$db_password = "1234";
$db_portnumber = "3306";
$db_charset = "utf8";

//데이터베이스 접속 처리
$con = @mysqli_connect($db_hostname, $db_username, $db_password,
    $db_database, $db_portnumber);

//접속시 에러 검사
if(mysqli_connect_errno()){
    printf("<h1>데이터베이스 접속 실패: [Error: %d] %s</h1>",
        mysqli_connect_errno(), mysqli_connect_error());
    exit();
}else{
    echo("데이터베이스 접속 성공");
}

@mysqli_set_charset($con, $db_charset); //데이터베이스와의 언어 설정을 UTF8로 지정
@mysqli_close($con);// 접속해제


?>

