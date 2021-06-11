<?php 

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['Password']),
FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90 ){

    echo "Длина логина не допустима";
    exit(); 
} elseif (mb_strlen($name) < 5 || mb_strlen($name) > 30 ){
    echo "Не коректное имя ";
    exit();
} elseif (mb_strlen($pass) < 2 || mb_strlen($pass) < 6 ){
    echo "Error password";
    exit();
} else {

    $pass = md5($pass."ghbdhH23wdsa");

    $mysql = new mysqli("127.0.0.1","root","root","avtoreg"); // хост, имя, пароль, название БД
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUE('$login','$pass', '$name')"); //add db

    $mysql->close();

    echo "200";
    header("Location: '/'");
}