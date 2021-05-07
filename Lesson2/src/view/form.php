
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prFile.php';

$product = $products[$_REQUEST['id'] ?? 0];
if (! empty($_POST)){

}


?>


<?php include  $_SERVER['DOCUMENT_ROOT'] . '/Lesson2/src/view/header.php'?>
<body>
<div class="menu">
    <div class="container">
        <nav>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
    </div>
</div>
<div class="container">
    <h1 class="title">Покупка</h1>

    <p class="succus">
        ваша покупка оформлена
    </p>
    <p class="error">
        Нужно выбрать товар и заполнить ФИО
    </p>

    <div class="items">
        <figure>
            <p><img src="<?= $product['img']?>" width="150"></p>
            <figcaption><?= $product['name']?></figcaption>
        </figure>
    </div>
    <form action="form.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <labal>
            Ваше ФИО:*
            <input type="text" name="name" placeholder="Введите ваше ФИО">
        </labal>
        <input type="submit" class="btn" value="Купить">
    </form>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php' ?>