<? header("Content-type: text/html; charset= UTF-8"); ?>
<?

include_once ('./inc/helper.php');

$user_name = post('user_name', FALSE);
$user_email = post('user_email', FALSE);
$user_tel = post('user_tel', FALSE);

if(!$user_name || !$user_email || !$user_tel){
    redirect('15-q01.php', '입력되지 않은 값이 있습니다 다시 처음부터 진행해 주세요.');
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
            개인정보를 입력해 주세요
        </h1>
    </div>
    <div>
        <form action="15-q03.php" method="post">
            <input type="hidden" name="user_name" value="<?=$user_name?>">
            <input type="hidden" name="user_email" value="<?=$user_email?>">
            <input type="hidden" name="user_tel" value="<?=$user_tel?>">

            <div class="radio">
                <label for="">
                    <input type="radio" name="gender" value="남자" checked>남자
                </label>
            </div>
            <div class="radio">
                <label for="">
                    <input type="radio" name="gender" value="여자">여자
                </label>
            </div>
            <button type="submit" class="btn btn-primary">다음단계</button>


        </form>


    </div>
</div>

</body>
</html>
