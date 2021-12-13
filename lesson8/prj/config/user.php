<?php
session_start();
include_once "db_goods.php";

if (isset($_POST['submit'])) {
    $login = trim(strip_tags($_POST['login']));
    if (strtolower($login) == 'admin') {
        exit("Логин админа нельзя зарегистрировать!");
    }
    $user = goodsAll($connect, 'users');



    foreach ($user as $item) {
        if ($login == $item['login']) {
            exit("Такой уже логин есть!");
        }
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = trim(strip_tags($_POST['email']));
    }
    $pass = trim(strip_tags($_POST['pass']));

    newUser($connect, $login, $email, md5($pass));

    $message = "Вы зарегистрированы!";
}

if (isset($_POST['enter'])) {
    $login = trim(strip_tags($_POST['login']));
    $pass = trim(strip_tags($_POST['pass']));

    $user = goodsAll($connect, 'users');
    foreach ($user as $item) {
        if ($login == $item['login'] and md5($pass) == $item['pass']) {
            $message = "Вы вошли!";
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            header("Location: login.php");
        } else {
            $message = "Не правильно ввели данные!";
        }
    }
}

if ($_GET['action'] == 'logout') {
    unset($_SESSION['login']);
    unset($_SESSION['pass']);
    session_destroy();
    header('Location: index.php');
}
