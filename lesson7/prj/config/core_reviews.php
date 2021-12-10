<?php
include_once "config.php";
if ($_POST['submit']) {
    $name = trim(strip_tags($_POST['name']));
    $email = trim(strip_tags($_POST['email']));
    $text = trim(strip_tags($_POST['text']));

    $t = "INSERT INTO reviews (name, email, text) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $email), mysqli_real_escape_string($connect, $text));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    } else {
        header("Location:../public/reviews.php");
    }
}

function commentsALL($connect)
{
    $query = "SELECT * FROM reviews ORDER BY id DESC";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    $n = mysqli_num_rows($result);
    $comments = [];

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $comments[] = $row;
    }

    return $comments;
}
