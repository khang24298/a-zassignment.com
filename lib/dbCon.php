<?php
$servername = "azassignment.crm9yo3gf2n6.us-east-2.rds.amazonaws.com";
$database = "a_zassignment";
$username = "admin";
$password = "Cxhkt1998!";

$con = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$con->set_charset("utf8");

?>