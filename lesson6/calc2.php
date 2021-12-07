<?php

$x = (int)($_POST['x']);
$y = (int)($_POST['y']);

$det = $_POST['oper'];

if ($det == '+') {
    $res = $x + $y;
} else if ($det == '-') {
    $res = $x - $y;
} else if ($det == '*') {
    $res = $x * $y;
} else if ($det == '/') {
    if ($y != 0) {
        $res = $x / $y;
    } else {
        echo "Cannot be devided by 0";
    }
}

?>

<form method="POST" style="border: 2px solid black; 
            width: 500px; 
            height: 200px; 
            text-align: center; 
            margin: 0 auto; 
            padding-top: 50px">
    <label>Введите первое число</label><br>
    <input type="number" name="x" value="<?= $x ?>"><br><br>
    <label>Введите второе число:</label><br>
    <input type="number" name="y" value="<?= $y ?>"><br><br>

    <input name="oper" type="submit" value="+">
    <input name="oper" type="submit" value="-">
    <input name="oper" type="submit" value="*">
    <input name="oper" type="submit" value="/">


    <br>

    <p style="margin-top: 20px;">Результат равен: <?php echo "$res" ?></p>

</form>