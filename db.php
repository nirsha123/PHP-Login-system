<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "123123123";
$dbname = "website";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
