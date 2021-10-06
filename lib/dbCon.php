<?php
$servername = "MYSQL5027.site4now.net";
$database = "db_a7abdb_az";
$username = "a7abdb_az";
$password = "Khang1998!";

$con = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$con->set_charset("utf8");

?>