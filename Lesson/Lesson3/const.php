<?php include $_SERVER['DOCUMENT_ROOT'] . "/base/header.php" ?>

<?php 
//define('MY_CONST', 10);
//var_dump(MY_CONST);

//  Системные константы 
define (__FILE__); //Показывает полный путь файла
define(__LINE__); // Строчка на которой была использована
define(__DIR__); // Выводит путь к исполняемой папке
define(__FUNCTION__); // Выводит название функции
define(__CLASS__); // Выводит название исполняемого класса
define(__METHOD__); //выводит название метода в классе
define(__NAMESPACE__); // Выводит пройстранство имен


var_dump("eee" . __LINE__);


?>

<h1>YSDs</h1>