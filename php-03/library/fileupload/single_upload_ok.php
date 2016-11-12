<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once ("../inc/helper.php");

//텍스트 형태의 데이터 받기
$comment = post('comment', false);
echo("<h1>사용자가 입력한 내용</h1>");
printf('comment: %s<br />', $comment);

//임시폴더에 업러드 된 파일정보 얻기
$name = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$tmp_name = $_FILES['myfile']['tmp_name'];

if(!$name || $size <1) {
    //파일의 이름이 없거나 업로드된 파일 크기가 없는 경우
    echo("<h1>업로드 된 파일 없음</h1>");

}else{
    echo("<h1>업로드 된 파일 정보</h1>");
    printf('name: %s<br />', $name);
    printf('type: %s<br />', $type);
    printf('size: %d<br />', $size);
    printf('tmp_name: %s<br />', $tmp_name);
}

//업로드 된 파일이 저장될 폴더의 경로를 지정하기
//DocumentRoot 안에서의 저장폴더 경로를 구성한다
$upload_dir_uri = "/files/".date('Ymd', time());
//DocumentRoot의 실제 경로를 얻어와서 전체 경로를 구성한다
$upload_dir_path = $_SERVER['DOCUMENT_ROOT'].$upload_dir_uri;

//폴더가 없으면 만든다
if(!is_dir($upload_dir_path)){
    $dir_create = mkdir($upload_dir_path, 0777, true);

    if(!$dir_create){
        die("폴더 생성 실패");
    }
}

//파일이 저장될 폴더 준비하기
//업로드 된 파일을 복사하기 위한 파일이름 생성하기
$p = strrpos($name, '.');
$l = strlen($name);
$file_ext = strtolower(substr($name, $p, $l-$p));

$file_name = ''; // 복사될 파일이름
$upload_uri = ''; // 복사될 웹 상의 경로
$upload_path = ''; // 복사될 전체 경로

//일단 무한루프
for($i = 1; $i>0; $i++){
    $file_name = time().'_'.rand(1000,9999).$file_ext;
    $upload_uri = $upload_dir_uri.'/'.$file_name;
    $upload_path = $upload_dir_path.'/'.$file_name;

    //같은 이름이 파일이 없다면 반복 종료
    if(!is_file($upload_path)){
        break;
    }
}


//파일 복사하기
$is_copy = copy($tmp_name, $upload_path);
if($is_copy){
    chmod($upload_path, 0777);
    echo("<h1>업로드 성공</h1>");
    printf("서버상의 절대경로 %s<br />", $upload_path);
    printf("웹상의 절대경로 %s<br />", $upload_uri);
}else{
    echo("<h1>업로드 실패</h1>");
}





?>

