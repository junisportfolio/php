<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once ('../inc/helper.php');

session_cache_expire(30);
session_start();

$user_id = post('user_id', false);
$user_pw = post('user_pw', false);

if(!$user_id){ redirect(false, '아이디를 입력하세요');}
if(!$user_pw){ redirect(false, '비밀번호를 입력하세요');}
if($user_id != 'juni'){ redirect(false, '가입된 사용자가 아닙니다');}
if($user_pw != '0000'){ redirect(false, '비밀번호가 맞기 않습니다.');}

$_SESSION['user_id'] = $user_id;
redirect('login.php', '안녕하세요. '.$user_id.'님');

?>