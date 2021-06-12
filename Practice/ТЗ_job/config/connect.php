<?php 


define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'sql10418488');


$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$MySql = mysqli_query($connect, "SELECT * FROM `resume_db`");



if (!$connect) {
    die('Error connect to database!');
}
?>