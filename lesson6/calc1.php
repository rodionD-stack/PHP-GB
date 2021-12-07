<?php

$x = (int)($_GET['x']);
$y = (int)($_GET['y']);
$det = $_GET['calc'];
if ($det == 'plus') {
    $res = $x + $y;
} else if ($det == 'minus') {
    $res = $x - $y;
} else if ($det == 'pow') {
    $res = $x * $y;
} else if ($det == 'dev') {
    if ($y != 0) {
        $res = $x / $y;
    } else {
        echo "Cannot be devided by 0";
    }
}

?>

<form style="border: 2px solid black; 
            width: 500px; 
            height: 100px; 
            text-align: center; 
            margin: 0 auto; 
            padding-top: 50px">
    <input type="number" name="x" value="<?= $x ?>">
    <select name="calc" id="">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="pow">*</option>
        <option value="dev">/</option>
    </select>
    <input type="number" name="y" value="<?= $y ?>">
    <input type="submit" value="=">
    <b><?php echo "$res" ?></b>

</form>