<?php
include $_SERVER['DOCUMENT_ROOT'] . "/base/header.php";
require (__DIR__ . '/file/controller.php')?>
<div class="container mt-4">
<h1>Реши задачку</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="problem">
    <input type="hidden" value="<?= $sourseOperator1; ?>" name="op1">
    <input type="hidden" value="<?= $sourseSum;?>" name="sum">
    <div>
        <span><?=$sourseOperator1?> +</span>
        <input type="text" value="<?=$sourseOperator2?>" size="2" name="op2">
        <span>= <?=$sourseSum?></span>
    </div>
    <div>

        <? if(isset($equaptionString)): ?>
        <span><?=$equaptionString?></span>
        <? endif; ?>

        <? if(isset($cuccess)): ?>
            <font color="green">
                <?=$cuccess?>
            </font>
        <? endif ?>
        <? if(isset($error)): ?>
            <font color="red">
                <?=$error?>
            </font>
        <? endif ?>
    </div>
    <br>
    <input type="submit" class="btn btn-success" name="solven_problema" value="Говото">
</form>

</div>



