<?php
include_once "../config/db_goods.php";
include_once "../config/product.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Auto Shop</title>
</head>

<body>
    <div id="container">
        <? include "header.php"; ?>
        <div class="content">
            <ul class="breadcrumbs">
                <li><a href="index.php">ГЛАВНАЯ</a></li>
                <li><?= $good['title'] ?></li>
            </ul>
            <div class="item-content">
                <h2><?= $good['title'] ?></h2>
                <div class="img-big"><img src="image/<?= $good['src'] ?>" alt="<?= $good['title'] ?>"></div>
                <div class="item_desc clearfix">
                    <h3>Описание товара</h3>
                    <div class="short">
                        <p><?= $good['description'] ?></p>
                    </div>
                    <div class="o-pay">
                        <p class="price"><?= $good['price'] ?>$</p>
                        <p class="add-to-basket"><a href="#">Купить</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <? include "footer.php"; ?>
        </div>
    </div>
</body>

</html>