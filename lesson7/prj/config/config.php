<?php

const SERVER = "localhost";
const DB = "gb_php";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Error:" . mysqli_error($connect));
