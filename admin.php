<?php
session_start();

$admin = "admin";

if ($_SESSION["username"] != $admin) {
    header("location: index.php?error=youarenotadmin!");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        body {
            font: 1em sans-serif;
            font-size: large;
            font-weight: bold;
        }
    </style>
    <script>
        function Hola_Jefe() {
            let txt;
            if (confirm("Hola Jefe,\n¿cómo estás hoy?")) {
                txt = "Good to Hear Jefe.";
            } else {
                txt = "Sorry to Hear that Jefe...";
            }
            document.getElementById("demo").innerHTML = txt;
        };
    </script>
</head>
<body>
    <?php
            if (isset($_SESSION["username"])) {
                echo "<p>Hello ". $admin ."</p>";
                echo "<a href='logout.php'>logout</a> ";
                echo "<a href='profile.php'>profile</a> ";
                echo "<a href='index.php'>home</a>";
            }
    ?>
    <h1>Hola Jefe, cómo estás hoy?</h1>
    <audio autoplay>
        <source src="hola.wav" type="audio/wav">
    </audio>
    <p id="demo"></p>
    <button onclick="Hola_Jefe()">Jefe.</button>
</body>
</html>