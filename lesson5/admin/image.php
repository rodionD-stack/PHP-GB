<a href="index.php">Вернуться на главный экран</a>

<?php
include_once("../config.php");

$imgId = $_GET['id'];
$ImgSql = "SELECT * FROM images WHERE id=$imgId";

if (mysqli_query($connect, $ImgSql)) {
    $image = mysqli_fetch_assoc(mysqli_query($connect, $ImgSql));
    $update = "UPDATE images SET count=count+1 WHERE id=$imgId";
    mysqli_query($connect, $update);
}

?>

<img src="../img/big/<?= $image['url'] ?>" alt="image <?= $imgId ?>">
<h2>Количество проссмотров: <?= ++$image['count'] ?></h2>