<?php
// The 3 below is for maintenance only!
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style> body {font: 1em sans-serif; font-size: larger; font-weight: bolder; text-align: center;}</style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="faq.php">FAQ</a>
        <a href="about.php">About</a>
        <a href="contactme.php">Contact Me</a>
        <a href="support.php">Support</a>
        <a href="profile.php">Profile</a>
    </nav>
    <h1>My Project: </h1>
    <h2>PHP Login System & Forgotten Password System by Email with CRUD &#129305;</h2>
    <h2>Click Below to check this out! &#128071;</h2>
<?php
    if (isset($_SESSION["username"])) {
        echo "<p>Hello ". $_SESSION["username"] ."</p>";
        echo "<a href='logout.php'>logout</a> ";
        echo "<a href='profile.php'>profile</a>";
    } else {
        echo "<a href='signup.php'>signup</a> ";
        echo "<a href='login.php'>login</a> ";
}
?>
</body>
</html>