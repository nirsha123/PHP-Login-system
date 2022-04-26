<?php

// define variables and set to empty values
$name = $email = $username = $password = "";
$nameErr = $emailErr = $usernameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                  $nameErr = "Only letters and white space allowed";
                }
              }
      
              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
      
        if (empty($_POST["username"])) {
          $username = "";
        } else {
          $username = test_input($_POST["username"]);
        }
      
        if (empty($_POST["password"])) {
          $password = "";
        } else {
          $password = test_input($_POST["password"]);
        }
      }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <style>
    body {
      font: 1em sans-serif;
      font-size: larger;
      text-align: center;
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

<h2>Sign Up</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" action="signupp.php" method="post">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error"> <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email" value="<?php echo $email;?>">
<span class="error"> <?php echo $emailErr;?></span>
<br><br>
username:
<input type="text" name="username" value="<?php echo $username;?>">
<span class="error"><?php echo $usernameErr;?></span>
<br><br>

Password: <input type="password" name="password" value="<?php echo $password;?>">
<span class="error"> <?php echo $passwordErr;?></span>
<br><br>
<button type="submit" name="submit">Sign Up</button>
</form>

</body>
</html>