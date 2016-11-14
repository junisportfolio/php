<? header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
//database 접속객체
$_DB = false;

/*데이터베이스에 접속한다.*/
function db_open(){
    //함수 밖에서 정의된 변수에 접근할 수 있도록 설정.
    global $_DB;

    //데이터베이스에 접속하기 위한 정보 정의하기
    $db_hostname = "localhost";
    $db_database = "myschool";
    $db_username = "root";
    $db_password = "1234";
    $db_portnumber = "3306";
    $db_charset = "utf8";

    /*데이터베이스 접속 처리*/
    if($_DB === false){
        $_DB = @mysqli_connect($db_hostname, $db_username, $db_password,
            $db_database, $db_portnumber);


        //에러가 존재한다면?
        if(mysqli_connect_errno()){
            //에러메시지 출력하기
            printf("<div style='padding: 15px; margin:10px; border:1px solid #dca7a7; border-radius: 4px; color: #a94442; background-color: #f2dede;'>
                    <strong>[Error: %d]</strong>%s</div>",
                mysqli_connect_errno(), mysqli_connect_error());
            // 웹 페이지 실행중단
            exit();
        }else{
            //캐릭터셋 설정하기
            @mysqli_set_charset($_DB, $db_charset);
        }
    }
}

/*데이터베이스 접속을 해제한다.*/
function db_close(){
    global $_DB;

    if($_DB !== false){
        /*접속해제*/
        @mysqli_close($_DB);
    }

}


?>