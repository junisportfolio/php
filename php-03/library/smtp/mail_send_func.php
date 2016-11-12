<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once('../inc/helper.php');

    $sender = post('sender',false);
    $sender_name = post('sender_name',false);
    $receiver = post('receiver',false);
    $receiver_name = post('receiver_name',false);
    $subject = post('subject',false);
    $content = post('content',false);

    if(!$sender){redirect(false, '보내는 사람의 메일 주소를 입력하세요.');}
    if(!$receiver){redirect(false, '빋는 사람의 메일 주소를 입력하세요.');}
    if(!$subject){redirect(false, '메일 제목을 입력하세요.');}
    if(!$content){redirect(false, '메일 내용을 입력하세요.');}

    $is_mail_send_ok = send_mail($sender, $sender_name, $receiver, $receiver_name, $subject, $content);

    if(!$is_mail_send_ok){redirect(FALSE, "메일발송에 실패했습니다.");}
    else{redirect("mail_write.php", "메일이 발송되었습니다.");}

?>

