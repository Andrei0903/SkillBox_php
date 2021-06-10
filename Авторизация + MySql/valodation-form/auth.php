<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['Password']),
FILTER_SANITIZE_STRING);



$pass = md5($pass."ghbdhH23wdsa");

$mysql = new mysqli("127.0.0.1","root","root","avtoreg"); // хост, имя, пароль, название БД

$result = $mysql->query("SELECT * FROM `users` WHERE `login` 
    = '$login' AND  `password` = '$pass'");

$user = $result->fetch_assoc();

if(count($user) == 0){
    echo "error 0 ";
    exit();
} 

setcookie('user', $user['name'], time() + 3600 * 24 * 365, "/");

print_r($user);
exit();

$mysql->close();

echo "200";
header("Location: '/'");