<?= include $_SERVER[DOCUMENT_ROOT] . "/base/header.php"; ?>

<?=
 $a = 21;

 if ($a > 10 && $a <= 20){
        $a *= $a;
        var_dump("Возвести в квадрат");
 }else if($a > 20 && $a < 30){
        $a = $a * $a * $a;    
        var_dump("Возвели в куб");
 } else {
        $a += 5;
        var_dump ("Мы прибывили 5");
 }

 var_dump($a);


 
//switch case

$a = "Банан";

switch ($a) {
       case "Яблоко":
       case "Банан" :
              echo "Фрукт";
              break;
       case "Вишня":
              echo "Ягода";
              break;
       case "Картошка":
              echo "Овощь";
              break;
}


?>
