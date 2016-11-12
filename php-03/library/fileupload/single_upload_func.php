<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
include_once ("../inc/helper.php");

$comment = post('comment', FALSE);
echo("<h1>사용자가 입력한 내용</h1>");
printf('comment: %s<br />', $comment);


//임시폴더에 업러드 된 파일정보 얻기
$name = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$tmp_name = $_FILES['myfile']['tmp_name'];


$upload_data = single_upload($name, $type, $size, $tmp_name);

if(!$upload_data){
    echo("<h1>업로드 실패</h1>");
}else{
    echo("<h1>업로드 결과</h1>");
    echo("<pre>");
    print_r($upload_data);
    echo("</pre>");
}
?>