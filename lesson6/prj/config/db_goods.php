<?php
require_once "config.php";

function goodsAll($connect)
{
    $query = "SELECT * FROM goods ORDER BY id DESC";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    $n = mysqli_num_rows($result);
    $goods = [];

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }

    return $goods;
}

function goodsGet($connect, $id)
{
    $query = sprintf("SELECT * FROM goods WHERE id=%d ", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    $good = mysqli_fetch_assoc($result);

    return $good;
}
