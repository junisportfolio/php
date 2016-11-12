<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
// 공통 함수 모음 파일 참조
include_once('./inc/helper.php');

// 파라미터 받기. 값이 없을 경우 기본값을 1로 설정함
$ans1 = get('ans1', 1);
$ans2 = get('ans2', 1);
$ans3 = get('ans3', 1);
?>
<!doctype html>
<html>
<head>
    <? include('./inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class='page-header'><h1>Q2) 당신의 성별은 무엇입니까?</h1>
    </div>
    <div>
        <!-- bootstrap list-group -->
        <ul class="list-group">
            <li class="list-group-item">
                <h4 class="list-group-item-heading">1번 문항 응답</h4>
                <p class="list-group-item-text"><?=$ans1?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">2번 문항 응답</h4>
                <p class="list-group-item-text"><?=$ans2?></p>
            </li>
            <li class="list-group-item">
                <h4 class="list-group-item-heading">3번 문항 응답</h4>
                <p class="list-group-item-text"><?=$ans3?></p>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
