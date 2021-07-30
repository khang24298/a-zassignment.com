<?php
$servername = "azassignment.crm9yo3gf2n6.us-east-2.rds.amazonaws.com";
$database = "a_zassignment";
$username = "admin";
$password = "Cxhkt1998!";

$mysqli = new mysqli($servername, $username, $password, $database);
// Specify connection timeout
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 30);
  /* check connection */
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
    
  /* change character set to utf8 */
  if (!$mysqli->set_charset("utf8")) {
    //   printf("Error loading character set utf8: %s\n", $mysqli->error);
  } else {
    //   printf("Current character set: %s\n", $mysqli->character_set_name());
  }
    
$mysqli->close();
?>