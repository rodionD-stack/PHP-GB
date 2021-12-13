<?php
include_once "../config/core_reviews.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>ОТЗЫВЫ</title>
</head>

<body>
    <div id="container">
        <? include "header.php"; ?>
        <div class="content">
            <?php
            $comments = commentsALL($connect);
            if ($comments) {
                foreach ($comments as $comment) {
                    echo "<div style='border: 1px solid black; margin: 10px; padding: 5px'>Имя: {$comment['name']}<br>Email: {$comment['email']}<br>Текст: {$comment['text']}</div>";
                }
            }
            ?>
            <hr>
            <form method="post" action="../config/core_reviews.php">
                <p>Оставить отзыв:</p>
                <p>Введите Имя: <input type="text" name='name' required></p>
                <p>Введите Email: <input type="email" name='email' required></p>
                <p>Отзыв: <textarea type="text" name='text' required></textarea></p>
                <p><input type="submit" name="submit"></p>
            </form>
        </div>
        <div>
            <? include "footer.php"; ?>
        </div>
    </div>
</body>

</html>