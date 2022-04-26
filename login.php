<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            text-align: center;
            font: 1em sans-serif;
            font-size: larger;
        }
    </style>
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
<h2>Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" action="loginn.php" method="post">
        Username: <input type="text" name="username" placeholder="Username...">
        Password: <input type="password" name=password placeholder="Password...">
        <button type="submit" name="submit" value="submit">Log In</button>
    </form>
</body>
</html>