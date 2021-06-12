<?= include $_SERVER[DOCUMENT_ROOT] . "/base/header.php"; ?>
<pre>
<h3> Цыклы с предусловием (while)</h3> 
<?php 
//Цыклы


$i = 0;

while ($i < 10) {
    echo "$i ";
    $i++;
}

?>
</pre>
 <h3>Цыкл постусловием do-while</h3>
<?php

$t = 5;

do{
    echo "$t ";
    $t++;
} while ($t < 10);

?>
<h3> Цыкл со счетчиком (for) </h3>
<?php


for($f = 0; $f < 10; $f++){
    if ($f % 2 == 0){
        echo "$f";
    }
}
?>

<h3>Цыкл для перебора массивов (foreach) </h3>

<?= 

$q = [1, 2, 'test', false];

foreach ($q as $value){
    echo $value . ' ,'; 
}
?>