<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
include_once ('./inc/helper.php');

$user_name = post('user_name', FALSE);
$user_email = post('user_email', FALSE);
$user_tel = post('user_tel', FALSE);
$gender = post('gender', FALSE);
$hobby = post('hobby', FALSE);

if(!$user_name || !$user_email || !$user_tel || !$gender || !$hobby){
    redirect('15-q01.php', '입력되지 않은 값이 있습니다 다시 처음부터 다시 진행해 주세요.');
}
$hobby_str = implode(", ", $hobby);
?>
<!doctype html>
<html lang="en">
<head>
    <? include('./inc/head.php'); ?>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>
            결과보기
        </h1>
    </div>
    <div>
        <form action="15-result.php" method="post">
            <input type="hidden" name="user_name" value="<?=$user_name?>">
            <input type="hidden" name="user_email" value="<?=$user_email?>">
            <input type="hidden" name="user_tel" value="<?=$user_tel?>">
            <input type="hidden" name="gender" value="<?=$gender?>">

            <ul class="list-group">
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">이름</h4>
                    <p class="list-group-item-text"><?=$user_name?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">이메일</h4>
                    <p class="list-group-item-text"><?=$user_email?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">연락처</h4>
                    <p class="list-group-item-text"><?=$user_tel?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">성별</h4>
                    <p class="list-group-item-text"><?=$gender?></p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">취미</h4>
                    <p class="list-group-item-text"><?=$hobby_str?></p>
                </li>
            </ul>

        </form>

        
    </div>
</div>

</body>
</html>
