<?php include $_SERVER["DOCUMENT_ROOT"] . "/base/header.php"?>
<?php

//var_dump($var);
// Проверка типа переменной 

// is_array();
// is_bool();

// is_float();
// is_double();
// is_real();

// is_int();
// is_integer();
// is_long();

// is_null();

// is_object();

// is_scalar();

// is_string();

// isset();

$a = 10;
$b = null;
isset($a); //true
isset($b); // false
isset($c); // false

//empty() //Проверяет, есть ли в переменной что-то 

empty($var);

// Функции для работы с массивами

$arr = [
    "key1" => "12",
    "key2" => 21,
    "key3" => 32,
    "key4" => "wes"
];
?>
<pre>
  <?=  var_dump($arr); ?>
</pre>
<?=
var_dump(count($arr)); // показывает сколько строк в массиве
var_dump(array_pop($arr)); // выведит последние данные из массива (извлекает)
var_dump(array_shift($arr)); // Извлекает первый элемент в масиве
?>
<pre>
  <?=  var_dump($arr); ?>
</pre>

    <h4>array_push и array_unshift</h4>
<pre>

<?php 
var_dump(array_push($arr, "key2")); // записывает в конец массива
var_dump(array_unshift($arr, "key1")); // записывает в начало массива 

var_dump($arr); 

var_dump(array_keys($arr)); //выводит все ключи массива
var_dump(array_values($arr)); //Выводит все значения массива

echo "Проверка, если в массеве значение is_array \n";
var_dump($arr); 
var_dump(is_array("key2", $arr));
var_dump(is_array(0, $arr));

// проверка по ключам

var_dump(array_key_exists("key1", $arr));
var_dump(array_key_exists(0, $arr));

echo "показывает уникальные данные array_unique \n";
var_dump(array_unique($arr));

// матические функции

abs(-10); //10
abs(-10); //10
abs(0); // 0

cos(5);
sin(0.5);
log(0.5);

pi(); // 3.14
M_PI; // 3.14


floor(3.34); //3
floor(2.311); //2
floor(-3.12); // -4


ceil(4.55); //5
ceil(1.99); //2
ceil(-3.1); //3

// round Округляет до целого числа
round(4.5); // 5
round(4.4); // 4

round(3.4543, 2); //3.45
round(3.2332, 1); //3.2

// max вернет самое большое число | min на обород
max(1,2,3,4); //4
max([3,4,]); //4

min(1 ,3, 4); //4
min([3, 1, 6]); //1

// pow возводит в степень
pow(4,4); // 16 || 4 ** 2 = 16

// Строки

$mystr = "hello, function";

strlen($mystr); //17

var_dump(explode(' ', $mystr)); // ["hello",", function"]

var_dump(htmlspecialchars("<a href='/'>clisck</a>"));
var_dump("<a href='/' class='Dark link'>Click</a>");

echo "md5 \n ";

var_dump(md5("asd"));
var_dump(md5("asd"));
var_dump(md5("asd1"));


?>

</pre> <br>
<hr> <br>
<pre>

<?php
echo "# data and time \n";


time(); // Возвращает кол-во секунд с момента прошедших с 1 января 1970г
date(); //Форматирует дату

var_dump(time());
var_dump(date('Y-m-d  H:i:s '));

?>
</pre> <br><br><br>

