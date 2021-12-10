<?php
include_once "config.php";

$goods = goodsAll($connect, 'goods');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$good = goodsGet($connect, $id, 'goods');
