<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'db.php';
    require_once 'functions.php';

    loginUser($conn, $username, $password);
}
else {
    header("location: index.php");
    exit();
}