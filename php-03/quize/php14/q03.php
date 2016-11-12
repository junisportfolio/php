<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    // 공통 함수 모음 파일 참조
    include_once('../inc/helper.php');
    // 파라미터 받기. 값이 없을 경우 기본값을 1로 설정함
    $ans1 = get('ans1', 1);
    $ans2 = get('ans2', 1);
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class='page-header'><h1>Q3) 당신의 성별은 무엇입니까?</h1></div>
    <div>
        <!-- bootstrap list-group -->
        <ul class="list-group">
            <li class="list-group-item">
                <a href="result.php?ans1=<?=$ans1?>&ans2=<?=$ans2?>&ans3=1">남자</a>
            </li>
            <li class="list-group-item">
                <a href="result.php?ans1=<?=$ans1?>&ans2=<?=$ans2?>&ans3=2">여자</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
