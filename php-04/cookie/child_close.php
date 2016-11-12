<? header("Content-type: text/html; charset= UTF-8"); ?>
<?php
    include_once('../inc/helper.php');
    $is_popup = post('is_popup', 'N');

    set_cookie('is_popup', $is_popup, 60);
?>
<script>
    window.close();
</script>
