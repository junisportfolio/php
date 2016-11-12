<? header("Content-type: text/html; charset= UTF-8"); ?>
<?
session_cache_expire(30);
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>

<div class="container">
    <?

        if(isset($_SESSION['mysession'])){
            echo('<h1>mysession = '.$_SESSION['mysession'].'</h1>');
        }else{
            echo('<h1>mysession값 없음</h1>');
        }

    ?>

    <form action="02-session_save.php" method="post" name="myform">
        <div class="form-group">
            <label for="user_input">
                세션저장하기
            </label>
            <input type="text" name="user_input" id="user_input" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">세션저장</button>

    </form>

</div>

</body>
</html>