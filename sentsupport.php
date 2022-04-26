<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    require_once 'db.php';
    require_once 'functions.php';

    SupportMe($conn, $name, $email, $subject);
}
else {
    header("location: index.php");
    exit();
}