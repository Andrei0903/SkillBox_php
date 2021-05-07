<?php

include $_SERVER['DOCUMENT_ROOT'] . '/prFile.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="menu">
    <div class="container">
        <nav>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
    </div>
    <div class="container">
        <h1 class="title">Каталог</h1>
        <div class="items">
            <?php foreach ($products as $id => $product) {?>
            <figure>
                <p><img src="<?= $product['img']?>" width="150"></p>
                <figcaption><?= $product['name']?></figcaption>
                <a href="src/view/form.php?id=<?=$id?>" class="btn">Купить</a>
            </figure>
           <?php }?>
        </div>
    </div>

</div>
</body>
</html>