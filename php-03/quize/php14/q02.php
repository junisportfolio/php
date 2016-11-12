<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 파일 참조
    include_once('../inc/helper.php');

    // 파라미터 받기. 값이 없을 경우 기본값을 1로 설정함
    $ans1 = get('ans1', 1);
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class='page-header'><h1>Q2) 당신의 취미는 무엇입니까?</h1>
    </div>
    <div>
        <!-- bootstrap list-group -->
        <ul class="list-group">
            <li class="list-group-item">
                <a href="q03.php?ans1=<?=$ans1?>&ans2=1">음악감상</a></li>
            <li class="list-group-item">
                <a href="q03.php?ans1=<?=$ans1?>&ans2=2">스포츠</a></li>
            <li class="list-group-item">
                <a href="q03.php?ans1=<?=$ans1?>&ans2=3">사진촬영</a></li>
            <li class="list-group-item">
                <a href="q03.php?ans1=<?=$ans1?>&ans2=4">등산</a></li>
        </ul>
    </div>
</div>
</body>
</html>
