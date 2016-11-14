<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<?php

$email = 'phpuser@itpaper.co.kr';
$p = mb_strpos($email, "@");

$user_id = mb_substr($email, 0, $p);
$domain = mb_substr($email, $p+1);

echo("<h1>".$user_id."</h1>");
echo("<h1>".$domain."</h1>");

?>