<?php

if (isset($_POST['solven_problema'])){

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $sum = $_POST['sum'];

    if (is_numeric($op1) && is_numeric($op2) && is_numeric($sum)){

        $equaptionString = $op1 . "+" . $op2 . "=" . $sum;

        if ($op1 + $op2 == $sum) {
            $cuccess = " успешно решили задачу";
        } else {
            $error = "Вы ошиблись";
        }
    } else {
        $error = "Вдены некоректные данные";
    }

}



if (!isset($error)){
    $sourseOperator1 = rand(0, 10);
    $sourseOperator2 = '';
    $sourseSum = rand(0, 10);
} else {
    $sourseOperator1 = $op1;
    $sourseOperator2 = $op2;
    $sourseSum = $sum;

}
