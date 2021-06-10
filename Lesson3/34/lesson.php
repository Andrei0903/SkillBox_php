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
    "key2" => 21
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


?>
</pre>