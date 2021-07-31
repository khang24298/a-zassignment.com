<?php
$servername = "127.0.0.1";
$database = "thenikki";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$con->set_charset("utf8");

?>