<html>
<head>
    <style>
        body {
            text-align: center;
            font: 1em sans-serif;
            font-size: larger;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "<p>Hello ". $_SESSION["username"] ."</p>";
    echo "<a href='logout.php'>logout</a> ";
    echo "<a href='profile.php'>profile</a>";
}
else {
    echo "you are not logged in.";
}
?>
<nav>
        <a href="/">Home</a>
        <a href="faq.php">FAQ</a>
        <a href="about.php">About</a>
        <a href="contactme.php">Contact Me</a>
        <a href="support.php">Support</a>
        <a href="profile.php">Profile</a>
</nav>
<h2>Support System</h2>
    <form action="sentsupport.php" method="post">
        Name: <input type="text" name="name" placeholder="name..">
        Email address: <input type="email" name="email" placeholder="email...">
        your problem: <input type="text" name="subject" placeholder="subject...">
        <button type="submit" name="submit" value="submit">send</button>
    </form>
</body>
</html>