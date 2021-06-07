
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/prFile.php';
include $_SERVER['DOCUMENT_ROOT'] . '/order.php';

$product = $products[$_REQUEST['id'] ?? 0];
$success = false;
$error = false;

if (! empty($_POST)){

    if (! empty($_POST['name']) || strlen($_POST['id']) >= 0){
        if (empty($_POST['name'])){
            $error = true;
        } else{
            if (MakeOrder($product, $_POST['name'])){
                $success = true;
            }else{
                $error = true;
            }
        }
    }
}


?>


<?php include  $_SERVER['DOCUMENT_ROOT'] . '/src/view/header.php'?>


<div class="container">
    <h1 class="title">Покупка</h1>

    <?php if ($success) {?>
        <p class="success">
            ваша покупка оформлена
        </p>
    <?php }?>

    <?php if ($error) {?>
        <p class="error">
            Нужно выбрать товар и заполнить ФИО
        </p>
    <?php }?>

    <div class="items">
        <figure>
            <p><img src="<?=$product['img']?>" width="150"></p>
            <figcaption><?=$product['name']?></figcaption>
        </figure>
    </div>
    <form action="form.php" method="post">
        <input type="hidden" name="id" value="<?=$product['id']?>">
        <labal>
            Ваше ФИО:*
            <input type="text" name="name" placeholder="Введите ваше ФИО" value="<?=htmlspecialchars($_POST['name'] ?? '') ?>">
        </labal>
        <input type="submit" class="btn" value="Купить">
    </form>

<?php include  $_SERVER['DOCUMENT_ROOT'] . '/src/view/footer.php'?>
