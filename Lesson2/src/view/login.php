<?php
include $_SERVER['DOCUMENT_ROOT'] . '/FilePass.php';

$one = false;
$errors = false;

$Users = $users[$_GET['id'] ?? 0];

if (! empty($_POST)){
    
    
    if (empty($_POST['login'])){
        $errors = true;
    }
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


<form class="formLog" action="login.php" method="post">
    <input type="text" name="login" placeholder="Login"/>
    <input type="password" name="pass" placeholder="pass"/>
    <input type="submit" name="btn" class="btn" value="Enter"/>
</form>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/src/view/footer'; ?>
