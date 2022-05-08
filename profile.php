<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font: 1em sans-serif;
            font-size: larger;
            text-align: center;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="faq.php">FAQ</a>
        <a href="about.php">About Me</a>
        <a href="contactme.php">Contact Me</a>
        <a href="support.php">Support</a>
        <a href="profile.php">Profile</a>
    </nav>
    <p>
        <?php
                if (isset($_SESSION["username"])) {
                    echo "<p>Hello ". $_SESSION["username"] ."</p>";
                    echo "<a href='logout.php'>logout</a> ";
                }
                else {
                    echo "<a href='signup.php'>signup</a> ";
                    echo "<a href='login.php'>login</a> ";
                }
        ?>
    </p>
</body>
</html>