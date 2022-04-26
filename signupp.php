<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'db.php';
    require_once 'functions.php';

    createUser($conn, $name, $email, $username, $password);
}
else {
    echo "<script>window.location.href='signup.php';</script>";
}
