<?php 

//Thể Loại
function theloai(){
	$qrmenu = "SELECT * FROM `category`
			  WHERE AnHien = 1
			";
	require "dbCon.php";
	$result_menu = mysqli_query($con, $qrmenu);
	mysqli_close($con);
	return $result_menu;
}
function theloai_order(){
	$qr = "SELECT * FROM `category`
			WHERE AnHien = 1
			ORDER BY ThuTu ASC
			";
	require "dbCon.php";
	$result = mysqli_query ($con, $qr);
	mysqli_close($con);
	return $result;
}
function count_tin($idTL){
	$qr = "SELECT * FROM `tintuc`
			WHERE idTL = $idTL
			";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function tinmoinhat(){
	$qrtinmoi = "SELECT * FROM `tintuc`
				ORDER BY idTin DESC
				LIMIT 0,5
				";
	require "dbCon.php";
	$result = mysqli_query($con, $qrtinmoi);
	mysqli_close($con);
	return $result;
}
function tinmaster(){
	$qr = "SELECT * FROM `tintuc`
			ORDER BY idTin DESC
			LIMIT 0,3		
	";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function timTL($idTL)
{
	$qr ="SELECT TenTL FROM `category`
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	$result=mysqli_query($con,$qr);
	$result = mysqli_fetch_array($result);
	mysqli_close($con);
	return $result;
}
function tinxemnhieu($from,$sotin1trang)
{
	$qrtinnhieu = "SELECT * FROM `tintuc`
				   ORDER BY SoLuotXem DESC
				   LIMIT $from,$sotin1trang
				   ";
    require "dbCon.php";
	$result = mysqli_query($con, $qrtinnhieu);
	mysqli_close($con);
	return $result;
}
function tin_theloai($idTL)
{
	$qrtin_tl = "SELECT * FROM `tintuc`
				WHERE idTL = $idTL
				ORDER BY SoLuotXem DESC
				LIMIT 0,9
				";
	require "dbCon.php";
	$result = mysqli_query($con, $qrtin_tl);
	mysqli_close($con);
	return $result;				
}
function DanhSachTinTuc(){
	$qr = "SELECT * FROM `tintuc`
			ORDER BY idTin DESC
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}
function tin_cungloai_het($idTL){
	$qrtin_tl = "SELECT * FROM `tintuc`
				WHERE idTL = $idTL
				ORDER BY ThuTu ASC
				";
	require "dbCon.php";
	$result = mysqli_query($con, $qrtin_tl);	
	mysqli_close($con);
	return $result;	
}
function tin_cungloai($idTL){
	$qrtin_tl = "SELECT * FROM `tintuc`
				WHERE idTL = $idTL
				ORDER BY ThuTu ASC
				LIMIT 0,4
				";
	require "dbCon.php";
	$result = mysqli_query($con, $qrtin_tl);
	mysqli_close($con);
	return $result;	
}
function chitiettin($idTin)
{
	$qrtin = "SELECT * FROM `tintuc`
			  WHERE idTin = $idTin
			  ";
	require "dbCon.php";
	$resulttin = mysqli_query($con,$qrtin);
	$result = mysqli_fetch_array($resulttin);
	mysqli_close($con);
	return $result;	
}
function timtin($idTin)
{
	$qrtin = "SELECT idTL FROM `tintuc`
			  WHERE idTin = $idTin
			  ";
	require "dbCon.php";
	$resulttin = mysqli_query($con,$qrtin);
	$result = mysqli_fetch_array($resulttin);
	mysqli_close($con);
	return $result;	
}
function capnhatluotxem($idTin)
{
	$qr = "UPDATE `tintuc`
		   SET SoLuotXem = SoLuotXem + 1
		   WHERE idTin = $idTin
		   ";
	require "dbCon.php";
	mysqli_query($con, $qr);
	mysqli_close($con);
	return;	
}
function tin_loaitin_phantrang($idTL, $from, $sotin1trang)
{
	$qrtin_lt = "SELECT * FROM `tintuc`
				WHERE idTL = $idTL
				ORDER BY ThuTu ASC
				LIMIT $from, $sotin1trang
				";
	require "dbCon.php";
	$result = mysqli_query($con, $qrtin_lt);
	mysqli_close($con);
	return $result;	
}
function insert_comments($user,$user_email,$content, $idTin)
{
	$qr = "INSERT INTO `comments` 
			VALUES (null,'$content','$idTin','$user','$user_email',NOW())";
	require "dbCon.php";
	mysqli_query ($con, $qr);
	mysqli_close($con);
	return;	
}
function comments($idTin)
{
	$qr ="SELECT * FROM `comments`
		WHERE idTin = $idTin
		";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}
function reply_comments($idCom)
{
	$qr = "SELECT * FROM `reply_com`
			WHERE idCom = $idCom
			";
	require  "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}
function check_quotes($stri){
	if (strstr($stri,"'"))
	{
		$str = str_replace("'", "''",$stri);
		return $str;
	}
	else {
		return $stri;
	}
}
function dangnhap_user($em, $pa)
{
	require "dbCon.php";
	$_em = mysqli_real_escape_string($con,$em);
	var_dump($_em);
	$_pa = md5(mysqli_real_escape_string($con,$_pa));
	$qr = "SELECT * FROM `users`
		   WHERE email = '$_em'
		   AND Password = '_$pa'
		   ";
	return $result = mysqli_query($con, $qr);
}

function dangki_user($em, $pa,$name)
{
	$pa = md5($pa);
	$curTime = date('Y-m-d H:i:s');
	$qr = "INSERT INTO `users`
		   VALUES(NULL,'$em','$name','','$pa','1',null,null,'$curTime','$curTime')
		   ";
	require "dbCon.php";
	return $result = mysqli_query($con, $qr);
}

function kiemtra_dangki($em){
	require "dbCon.php";
	$_em = mysqli_real_escape_string($con,$em);
	$qr = "SELECT * FROM `users`
		   WHERE email = '$_em'
		   ";
	return $result = mysqli_query($con, $qr);
}
function storeReview($params)
{
	$now = date('Y-m-d H:i:s');
	extract($params);
	if(isset($isShow)){
		$show = ($isShow == "on" ? 1 : 0);
	}
	else{
		$show = 0;
	}
	$qr = "INSERT INTO `reviews`
			VALUES (null,'$name', '$email','$content','$star','$now','$now','$show')
			";
    require "dbCon.php";
    $result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}
// Get Rating
function getReviews()
{
	$qr = "SELECT * FROM `reviews` 
			WHERE isShow = 1";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}

// Get feedbacks
function getFeedbacks(){
	$qr = "SELECT * FROM `feedbacks` WHERE isShow = 1";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;	
}

?>
