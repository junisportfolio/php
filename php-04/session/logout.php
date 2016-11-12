<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once ('../inc/helper.php');

    session_cache_expire(30);
    session_start();

    session_destroy();

    redirect('login.php', '안녕하 가세요.');

?>