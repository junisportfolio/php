<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
//데이터베이스 처리 파일 인클루드
include_once('../inc/db_helper.php');
//데이터베이스에 접속한다.
db_open();
?>
<!doctype html>
<head>
    <?php include_once('../inc/head.php') ?>
</head>
<body>
<div class="container">
    <p class="alert alert-success">
        데이터베이스 접속 성공
    </p>
</div>
</body>
</html>
<?php
//페이지 종료 직전에 데이터베이스 접속을 해제한다.
db_close();
?>

