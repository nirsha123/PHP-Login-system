<?php

function createUser($conn, $name, $email, $username, $password) {
    $sql = "INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) { 
        echo "<script>window.location.href='signup.php';</script>";
        exit();
    }

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>window.location.href='index.php';</script>";
    exit();
}

function loginUser($conn, $username, $password) {
    $sql = "SELECT password FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){ 
        printf("Error message: %s\n", mysqli_error($conn));
        exit('erred');
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultData[$username] = mysqli_fetch_assoc($pwdhashed);
    $row = mysqli_stmt_fetch($stmt);
    $pwdhashed = password_verify($password, $row['password']);
    mysqli_stmt_close($stmt);
    if ($resultData === false) {
        header("location: index.php?error=browhat");
        exit();
    } else {
        session_start();
        $_SESSION["usernamee"] = $username;
        header("location: index.php");
        exit();
    }
}

function SupportMe($conn, $name, $email, $subject) {
    $sql = "INSERT INTO supportchat (name, email, subject) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){ 
            echo "<script>window.location.href='signup.php';</script>";
            exit();
        }
    
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $subject);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>window.location.href='index.php';</script>";
    exit();
}