<? header("Content-type: text/html; charset= UTF-8"); ?>
<!doctype html>
<html lang="en">
<head>
    <? include('../inc/head.php'); ?>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>
            파일업로드
        </h1>
    </div>
    <form action="single_upload_func.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myfile">파일선택</label>
            <input type="file" name="myfile" id="myfile" class="form-control" />
        </div>
        <div class="form-group">
            <label for="comment">파일설명</label>
            <input type="text" name="comment" id="comment" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
