<?php
require_once "config.php";

function goodsAll($connect, $table, $orderby = 'id')
{
    $query = "SELECT * FROM {$table} ORDER BY {$orderby} DESC";
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

function goodsGet($connect, $id, $table)
{
    $query = sprintf("SELECT * FROM {$table} WHERE id=%d ", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function newUser($connect, $login, $email, $pass)
{
    $t = "INSERT INTO users (login, email, pass) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $login), mysqli_real_escape_string($connect, $email), mysqli_real_escape_string($connect, $pass));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    return true;
}

function newTempOrder($connect, $id_good, $title, $price, $count, $login = null)
{
    $t = "INSERT INTO temp_orders (id_good, title, price, count, login) VALUES ('%s', '%s', '%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $id_good), mysqli_real_escape_string($connect, $title), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $count), mysqli_real_escape_string($connect, $login));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    return true;
}

function editTempOrder($connect, $id, $count)
{
    $id = (int)$id;

    $sql = "UPDATE temp_orders SET count='%d' WHERE id_good='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $count), $id);

    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}

function getOneTemp($connect, $id, $table)
{
    $query = sprintf("SELECT * FROM {$table} where id_good=%d", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}
