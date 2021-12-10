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
    <script src="js/jquery.js"></script>
    <script src="js/my.js"></script>
    <title>Auto Shop</title>
</head>

<body>
    <div id="container">
        <? include "header.php"; ?>
        <div class="content">
            <h1>Интернет магазин автомобилей</h1>
            <hr>
            <?php
            if (isset($goods)) {
                //print_r($goods);
                foreach ($goods as $good) { ?>
                    <div class="item">
                        <a href="item.php?id=<?= $good['id'] ?>"><img src="image/<?= $good['src'] ?>" alt="<?= $good['title'] ?>" title="<?= $good['title'] ?>"></a>
                        <h3 class="item-name"><a href="item.php?id=<?= $good['id'] ?>"><?= $good['title'] ?></a></h3>
                        <p class="price"><?= $good['price'] ?>р.</p>
                        <p class="add-to-basket"><a href="#" onclick="item(<?= $good['id'] ?>)" title="Добавить в корзину">Купить</a></p>
                    </div>
            <? }
            }
            ?>
        </div>
        <div>
            <? include "footer.php"; ?>
        </div>
    </div>
</body>

</html>