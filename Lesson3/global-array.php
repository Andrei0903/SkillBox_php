<?php include $_SERVER['DOCUMENT_ROOT'] . "/base/header.php" ?>

<pre>
    <?php 
        var_dump($_GET);
        var_dump($_POST);
        var_dump($_FILES);
        var_dump($_COOKIE);
        var_dump($_REQUEST);
        var_dump($_SESSION);
    ?>
</pre>
<pre>
    <?php var_dump($_SERVER) ?>
</pre>

<?php 
    $GLOBALS['my_key'] = "global value";
    var_dump($GLOBALS['my_key']);
?>