<?php include $_SERVER['DOCUMENT_ROOT'] . "/base/header.php"?>

<div class="container mt-4">
   <div class="row">

   <?php if ($_COOKIE['user'] == ''): ?>
    <div class="col">
        <h1>Форма регистрации</h1>
        <form action="/valodation-form/check.php" method="POST">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"/> <br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"/> <br>
            <input type="password" class="form-control" name="Password" id="Password" placeholder="Введите пароль"/> <br>
            <Button class="btn btn-success" type="submit">Регистрация</Button>
        </form>
    </div>
    <div class="col">
        <h1>Форма авторизации</h1>
        <form action="/valodation-form/auth.php" method="POST">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"/> <br>
            <input type="password" class="form-control" name="Password" id="Password" placeholder="Введите пароль"/> <br>
            <Button class="btn btn-success" type="submit">Войти </Button>
        </form>
    </div>

    <?php else: ?>
        <p>Привет <?= $_COOKIE['user'] ?> Чтоб выйти нажмите <a href="/valodation-form/exit.php">здесь</a></p>
    <?php endif; ?>

   </div>
</div>


