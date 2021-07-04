<?php
$con = mysqli_connect("127.0.0.1","root","","thenikki");
if (!$con)
{
	die("Connection Failed:".mysqli_connect_error());
}
// $con = mysqli_connect("localhost","root","","huong-project");
// if (!$con)
// {
// 	die("Connection Failed:".mysqli_connect_error());
// }
mysqli_set_charset($con, 'UTF8');	
?>