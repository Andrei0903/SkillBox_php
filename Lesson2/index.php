<?php

include $_SERVER['DOCUMENT_ROOT'] . '/prFile.php'

?>
<?php include  $_SERVER['DOCUMENT_ROOT'] . '/src/view/header.php' ?>

    <div class="container">
        <h1 class="title">Каталог</h1>
        <div class="items">
            <?php 
            foreach ($products as $id => $product) {?>
            <figure>
                <p><img src="<?= $product['img']?>" width="150"></p>
                <figcaption><?= $product['name']?></figcaption>
                <a href="src/view/form.php?id=<?=$id?>" class="btn">Купить</a>
            </figure>
           <?php }?>
        </div>
    </div>

<?php include  $_SERVER['DOCUMENT_ROOT'] . '/src/view/footer.php'?>