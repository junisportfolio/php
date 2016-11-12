<? header("Content-type: text/html; charset= UTF-8"); ?>
<!doctype html>
<html lang="en">
<head>
    <? include('../inc/head.php'); ?>
    <script src="http://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>
            Mail Send Test
        </h1>
    </div>
    <form class="form-horizontal" action="mail_send_func.php" method="post">
        <div class="form-group">
            <label for="sender" class="control-label col-sm-2">
                Sender Email
            </label>
            <div class="col-sm-10">
                <input type="text" name="sender" id="sender" class="form-control" placeholder="보내는 분의 이메일 주소를 입력하세요.">
            </div>

        </div>

        <div class="form-group">
            <label for="sender_name" class="control-label col-sm-2">
                Sender Name
            </label>
            <div class="col-sm-10">
                <input type="text" name="sender-name" id="sender_name" class="form-control" placeholder="보내는 분의 이름을 입력하세요.">
            </div>
        </div>

        <div class="form-group hidden">
            <label for="receiver" class="control-label col-sm-2">
                Receiver Email
            </label>
            <div class="col-sm-10">
                <input type="text" name="receiver" id="receiver" class="form-control" placeholder="받는 분의 이메일 주소를 입력하세요." value="junishop@gmail.com">
            </div>
        </div>

        <div class="form-group hidden">
            <label for="receiver" class="control-label col-sm-2">
                Receiver Name
            </label>
            <div class="col-sm-10">
                <input type="text" name="receiver_name" id="receiver" class="form-control" placeholder="받는 분의 이름을 입력하세요." value="Perblisher-Juni">
            </div>
        </div>

        <div class="form-group">
            <label for="subject" class="control-label col-sm-2">
                Subject
            </label>
            <div class="col-sm-10">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="이메일의 제목을 입력하세요.">
            </div>
        </div>

        <div class="form-group">
            <label for="content" class="control-label col-sm-2">
                Content
            </label>
            <div class="col-sm-10">
                <textarea name="content" id="content" class="ckeditor"></textarea>
            </div>
        </div>

        <div class="col-sm-10 col-sm-offset-2 text-right">
            <input type="submit" class="btn btn-primary" value="메일보내기">
            <input type="reset" class="btn btn-default" value="다시작성">

        </div>

    </form>

</div>

</body>
</html>
