<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
include_once ('./inc/helper.php');

$user_name = post('user_name', FALSE);
$user_email = post('user_email', FALSE);
$user_tel = post('user_tel', FALSE);
$gender = post('gender', FALSE);

if(!$user_name || !$user_email || !$user_tel || !$gender){
    redirect('15-q01.php', '입력되지 않은 값이 있습니다 다시 처음부터 다시 진행해 주세요.');
}

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
            취미를 선택해 주세요
        </h1>
    </div>
    <div>
        <form action="15-result.php" method="post">
            <input type="hidden" name="user_name" value="<?=$user_name?>">
            <input type="hidden" name="user_email" value="<?=$user_email?>">
            <input type="hidden" name="user_tel" value="<?=$user_tel?>">
            <input type="hidden" name="gender" value="<?=$gender?>">

            <div class="radio">
                <label for="">
                    <input type="checkbox" name="hobby[]" value="음악감상">음악감상
                </label>
            </div>
            <div class="radio">
                <label for="">
                    <input type="checkbox" name="hobby[]" value="영화감상">영화감상
                </label>
            </div>
            <div class="radio">
                <label for="">
                    <input type="checkbox" name="hobby[]" value="게임">게임
                </label>
            </div>
            <button type="submit" class="btn btn-primary">결과보기</button>


        </form>

        
    </div>
</div>

</body>
</html>
