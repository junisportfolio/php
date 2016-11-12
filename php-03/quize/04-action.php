<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?php
//공통 함수 모음 파일 참조
include_once ('./inc/helper.php');

//POST 파라미터 받기
$user_name = $_POST['user_name'];

//값이 없을 경우 메세지 출력 후 이전 페이지로 강제 이동
if(!$user_name){
    redirect(FALSE, '이름을 입력하세요.');
}

?>
<!doctype html>
<html>
<head>
    <? include('./inc/head.php'); ?>
</head>
<body>

<div class='container'>
    <h1 class="page-header"><?=$user_name?></h1>
</div>

</body>
</html>
