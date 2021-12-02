<?php
include "../config.php";

$sql = "select * from images";
$res = mysqli_query($connect,$sql);

?>

<table style="text-align:center; margin:0 auto;" border="1"  width="700">
    <tr>
        <th>Фото</th>
        <th>Название</th>
        <th>Размер</th>
    </tr>
    <?php
    while($data = mysqli_fetch_assoc($res)):?>
        <tr>
            <td>
                <a href="../img/<?= $data['url']?>"><img width="150" src="../img/<?= $data['url']?>" alt=""></a>
            </td>
            <td>
            <?= $data['title']?>
            </td>
            <td>
            <?= $data['size']?>
            </td>
        </tr>
        <?php
            endwhile;
    
    ?>
</table>
