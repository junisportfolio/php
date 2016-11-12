<? header("Content-type: text/html; charset= UTF-8"); ?>
<!doctype html>
<html lang="en">
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>

<div class="container">
    <?
        if(isset($_COOKIE['mycookie'])){
            echo('<h1>mycookie='.urlencode($_COOKIE['mycookie']).'</h1>');
        }else{
            echo('<h1>mycookie값 없음</h1>');
        }
    ?>

    <form action="02-cookie_save.php" method="post">
        <div class="form-group">
            <lavel for="user_input">쿠키 저장하기</lavel>
            <input type="text" name="user_input" id="user_input" class="form_control">
        </div>
        <button type="submit" class="btn btn-primary">쿠키저장</button>

    </form>

</div>

</body>
</html>
