<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!doctype html>
<html>
<head>
    <? include('./inc/head.php'); ?>
</head>
<body>

<div class='container'>
    <h1 class="page-header">POST 전송예제</h1>

    <form method="post" action="04-action.php">
        <div class="form-group">
            <label for="user_name">이름</label>
            <input type="text" name="user_name" id="user_name"
                   class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
