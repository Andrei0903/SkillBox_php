<?php include $_SERVER['DOCUMENT_ROOT'] . "/base/header.php" ?>
<pre>
<?php 

/** Что будет если 
 * "1" == 1;
 * [] == 1;
 * (false == 1);
 */

var_dump((int)"44dsda"); // 44
var_dump((int)"te10"); // 0
var_dump((int)"-32te10"); // -32
var_dump((int)"0te10"); // 0
var_dump((int)"-0te10"); // 0
var_dump((int)"221te10"); // 221
var_dump((int)"-1te10"); // -1

var_dump((float)"1.3te10"); // 1.3
var_dump((float)"-1.3te10"); // -1.3
var_dump((float)"te10"); // 0
var_dump((float)"-.te10"); // 0
var_dump((float)"-.4tewq21110"); // 0.4
var_dump((float)"1,2tewq21110"); // 1

var_dump("10" + 10);
var_dump("10string" + "300");
var_dump("23n" + "12sd"); 
// var_dump("sda" + "sda"); //error

// Приведение к boolean
// float
// int = 0
// float = 1.6
// strig = "sd", ""
// array [];
// null
// simplexml (ООП)

$a = null;

var_dump((bool)10); //true
var_dump((bool)"10"); //true
var_dump((bool)""); //false
var_dump((bool)" "); //true Должен быть хотяб 1 элемент
var_dump((bool)[]); // false
var_dump((bool)[false]); //true
var_dump((bool)[null]); // true
var_dump((bool)null); // false


$z = [1 , 2]; // key = 0 , 1
$x = ["2" => 3, "key1" => 4, 5]; // key = 2, key1, 3

var_dump($z + $x);

/**
 * $a + $b;
 * $a == $b;
 * $a === $b;
 * $a != $b;
 * $a !== $b;
 */

 var_dump((array)10); // [10]
 var_dump((array)false); // [false];
 var_dump((array)1, 2); // [1, 2]
 
 // == 

/**
 * false == []
 * null == []
 * [] == [] 
 */
?>
</pre>