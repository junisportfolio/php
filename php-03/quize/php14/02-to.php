<? header("Content-Type: text/html; charset=UTF-8"); ?>
<?
    $ans = $_GET['ans'];
    $result = "";

    if (intval($ans) == 300) {
        $result = "정답입니다.";
    } else {
        $result = "정답이 아닙니다.";
    }
?>
<!doctype html>
<html>
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class='container'>
    <div class='page-header'><h1>응답결과</h1></div>
    <div><p><?=$result?></p></div>
</div>
</body>
</html>
