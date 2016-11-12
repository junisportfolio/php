<? header("Content-type: text/html; charset= UTF-8"); ?>
<?
include_once ('../inc/helper.php');

$user_input = post('user_input', false);

$msg = '';
if($user_input != false){
    setcookie('mycookie', urlencode($user_input), time() + 60, '/');
    $msg = '쿠키 저장 완료';
}else{
    setcookie('mycookie',urlencode($user_input), time() + 60, '/');
    $msg = '쿠키 삭제 완료';
}
redirect('cookie.php', $msg);

?>