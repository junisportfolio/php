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
            개인정보를 입력해 주세요
        </h1>
    </div>
    <div>
        <form action="15-q02.php" method="post">
            <div class="form-group">
                <label for="user_name">이름</label>
                <input type="text" name="user_name" class="form-control" id="user_name">
            </div>
            <div class="form-group">
                <label for="user_email">이메일</label>
                <input type="text" name="user_email" class="form-control" id="user_email">
            </div>
            <div class="form-group">
                <label for="user_tel">연락처</label>
                <input type="text" name="user_tel" class="form-control" id="user_tel">
            </div>
            <button type="submit" class="btn btn-primary">다음단계</button>


        </form>

        
    </div>
</div>

</body>
</html>
