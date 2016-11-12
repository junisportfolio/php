<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once ('../inc/helper.php');

    session_cache_expire(30);
    session_start();

    $session_user_id = get_session('user_id', false);


?>
<?php phpinfo(); ?>
<!doctype html>
<html>
<head>
    <?include_once ('../inc/head.php'); ?>

</head>
<body>
<div class="container">
    <?php
    if($session_user_id == false){ ?>
        <h1 class="page-header">
            로그인
        </h1>
        <form action="login_ok.php" method="post" name="myform" class="form-inline">
            <div class="form-group">
                <input type="text" name="user_id" id="user_id" class="form-control" placeholder="user id">
            </div>
            <div class="form-group">
                <input type="password" name="user_pw" id="user_pw" class="form-control" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">로그인</button>
        </form>
    <?php }else{ ?>

        <h1 class="page-header">
            로그아웃
        </h1>
        <div>
            <p>안녕하세요. <?= $session_user_id ?>님</p>
            <a href="logout.php" type="submit" class="btn btn-primary">로그아웃</a>

        </div>
    <?php } ?>
</div>

</body>
</html>