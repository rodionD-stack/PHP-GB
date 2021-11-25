<div style="display: flex; 
            justify-content: space-between;
            align-itms: center;
            flex-wrap: wrap;
            width: 1000px;
            margin: 0 auto;
            gap: 30px;
            border: 2px solid black;
            background-color: rgb(77, 211, 216)">
<?php
    $images = scandir("images");
    for($i = 2; $i < count($images); $i++) {?>
                <a href="full_image.php?file=<?= $images[$i]?>"><img width="300" src="images/<?= $images[$i]?>"></img></a>
    <?php
    }?>
</div>