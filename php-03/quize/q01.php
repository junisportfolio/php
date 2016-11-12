<? header("Content-type: text/html; charset= UTF-8"); ?>
<!doctype html>
<html lang="en">
<head>
    <? include('./inc/head.php'); ?>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>
            Q1) 당신의 직업은 무엇입니까?
        </h1>
    </div>
    <div>
        <!-- bootstrap list group -->
        <ul class="list-group">
            <li class="list-group-item">
                <a href="q02.php?ans1=1">웹 프로그래머</a>
            </li>
            <li class="list-group-item">
                <a href="q02.php?ans1=2">프론트엔드 프로그래머</a>
            </li>
            <li class="list-group-item">
                <a href="q02.php?ans1=3">그래픽 디자이너</a>
            </li>
            <li class="list-group-item">
                <a href="q02.php?ans1=4">서비스 기획</a>
            </li>
        </ul>
    </div>
</div>

</body>
</html>
