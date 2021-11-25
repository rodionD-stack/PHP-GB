<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="block">
        <form class="forms" action="server.php" method="post" enctype="multipart/form-data">
            <p class="forms_text">Выберите файл</p>
            <input class="forms_inpt" type="file" name="photo" accept="image/*"><br>
            <input class="forms_btn" type="submit" value="Сохранить">
        </form>
    </div>
    
</body>

</html>