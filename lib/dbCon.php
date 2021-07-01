<?php
$con = mysqli_connect("thenikki.ckf2zflwymxq.us-east-2.rds.amazonaws.com","admin","Cxhkt1998","azassignment");
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