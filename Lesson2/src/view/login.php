<?php
include $_SERVER['DOCUMENT_ROOT'] . '/logins.php';
include $_SERVER['DOCUMENT_ROOT'] . '/password.php';

$one = false;
$errors = false;

if (! empty($_POST)){
    $one = true;
}

?>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/src/view/header.php'; ?>

    <?php if ($one) {?>
        <p class="success">
             верно
        </p>
    <?php }?>

    <?php if ($errors) {?>
        <p class="error">
            Ошибка
        </p>
    <?php }?>


<form class="formLog" action="login.php">
    <input type="text" name="login" placeholder="Login"/>
    <input type="password" name="pass" placeholder="pass"/>
    <input type="submit" name="btn" class="btn" value="Enter"/>
</form>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/src/view/footer'; ?>
