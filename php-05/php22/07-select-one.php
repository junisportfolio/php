<? header("Content-Type: text/html; charset=UTF-8"); ?>

<?php
include_once('../inc/helper.php');
include_once('../inc/db_helper.php');
/* DB 접속하기*/
db_open();
/* SQL 처리하기*/
$sql = "SELECT profno, name, userid, position, sal, hiredate, comm, deptno 
FROM = professor 
WHERE name = '김도훈'
";

//SQL문 실행하기
$result = mysqli_query($_DB, $sql);

//실행결과 점검하기
if(mysqli_errno($_DB)){
    printf('<h1>MySQL SQL Fail : %s</h1>', mysqli_error($_DB));
    db_colse();
    exit();
}

/* 결과 출력하기*/
//영향을 받은 행의 수
$count = mysqli_num_rows($result);
if($count < 1){
    echo('<h1>조회결과가 없습니다.</h1>');
    db_close();
    exit();
}
// 조회결과를 배열로 변환 --> 컬럼이름이 배열의 라벨이 된다.
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<head>
    <?php include_once('../inc/head.php') ?>
</head>
<body>
<div class="container">
    <h1 class="page-header"><?=$row['name']?> 교수</h1>
    <table class="table">
        <thead>
        <tr>
            <th>항목</th>
            <th>내용</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>교수번호</th>
            <td><?=$row['profno']?></td>
        </tr>
        <tr>
            <th>아이디</th>
            <td><?=$row['userid']?></td>
        </tr>
        <tr>
            <th>직급</th>
            <td><?=$row['position']?></td>
        </tr>
        <tr>
            <th>급여</th>
            <td><?=$row['sal']?></td>
        </tr>
        <tr>
            <th>입사일</th>
            <td><?=$row['hiredate']?></td>
        </tr>
        <tr>
            <th>보직수당</th>
            <td><?=$row['comm']?></td>
        </tr>
        <tr>
            <th>학과번호</th>
            <td><?=$row['deptno'] ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<?php
/*DB 접속 해제*/
db_close();
?>