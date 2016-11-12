<? header("Content-type: text/html; charset= UTF-8"); ?>

<?
    include('../inc/helper.php');
    session_cache_expire(30);
    session_start();

    $user_input = post('user_input', false);

    $msg = '';
    if($user_input != false){
        $_SESSION['mysession'] = $user_input;
        $msg = '세션 저장 완료';
    }else{
        unset($_SESSION['mysession']);
        $msg = '세션 삭제 완료';
    }
    redirect('01-session.php', $msg);
?>