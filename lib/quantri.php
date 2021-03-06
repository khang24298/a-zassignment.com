<?php
function vn_to_str($str)
{
	 
	$unicode = array(
	 
	'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
	 
	'd'=>'đ',

	'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	 
	'i'=>'í|ì|ỉ|ĩ|ị',
	 
	'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	 
	'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
	 
	'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
	 
	'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	 
	'D'=>'Đ',
	 
	'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	 
	'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
	 
	'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	 
	'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	 
	'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',);
 
	foreach($unicode as $nonUnicode=>$uni){
	 
	$str = preg_replace("/($uni)/i", $nonUnicode, $str);
	 
	}
	$str = str_replace(' ','-',$str);
 
	return $str;
	 
}
function dangnhap($username, $password)
{
	
	$qr = "SELECT * FROM `admins`
		   WHERE username = '$username'
		   AND password = '$password' 
		   ";

	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
//The Loai
function DanhSachTheLoai()
{
	$qr = "SELECT * FROM `category`
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function themTheLoai($TenTL, $TenTL_KD, $AnHien,$ThuTu)
{
	$qr = "INSERT INTO `category`
			VALUES (null,'$TenTL', '$TenTL_KD', '$AnHien','$ThuTu')
			";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function timTL($idTL)
{
	$qr ="SELECT * FROM `category`
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	$result=mysqli_query($con,$qr);
	$result_final = mysqli_fetch_array($result);
	mysqli_close($con);
	return $result_final;
}
function suaTheLoai($idTL,$TenTL, $TenTL_KD,$AnHien, $ThuTu)
{	
	$qr ="UPDATE `category`
		  SET TenTL = '$TenTL', TenTL_KD = '$TenTL_KD', AnHien ='$AnHien',ThuTu = '$ThuTu'
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
	mysqli_close($con);
}
function xoaTheLoai($idTL)
{
	$qr ="DELETE FROM `category` 
		  WHERE idTL = $idTL
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
	mysqli_close($con);
}
// Quản lý tin tức
function DanhSachTinTuc(){
	$qr = "SELECT * FROM `tintuc`
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function themTinTuc($Title, $Title_KD,$TomTat, $Content, $idTL, $urlHinh,$Author,$ThuTu)
{
	$qr = "INSERT INTO `tintuc`
			VALUES (null,'$Title', '$Title_KD','$TomTat','$Content','$idTL','$urlHinh','$Author','$ThuTu',0,NOW())
			";
	require "dbCon.php";
	mysqli_query($con, $qr);
	mysqli_close($con);
	
}
function timtin($idTin)
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
function tim_tl($idTL)
{
	$qrtim_tl ="SELECT * FROM `category`JOIN `tintuc` 
				ON `category`.idTL=`tintuc`.idTL 
				WHERE `category`.idTL = $idTL
				";
	require "dbCon.php";
	$result_tl = mysqli_query($con, $qrtim_tl);
	mysqli_close($con);
	return $result_tl;
}
function DanhSachTheLoai_Except($idTL)
{
	$qr = "SELECT * FROM `category`
		   WHERE idTL <> $idTL
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
function suaTinTuc($Title,$Title_KD,$TomTat,$Content,$idTL,$urlHinh,$ThuTu, $SoLuotXem,$Author,$idTin)
{
	$qr = "UPDATE `tintuc`
			SET Title = '$Title', Title_KD = '$Title_KD', TomTat = '$TomTat', Content = '$Content', idTL ='$idTL', urlHinh = '$urlHinh',ThuTu='$ThuTu',SoLuotXem='$SoLuotXem', Author = '$Author'
			WHERE idTin = $idTin
			";
    require "dbCon.php";
    mysqli_query($con, $qr);
	mysqli_close($con);

}
function xoaTinTuc($idTin)
{
	$qr ="DELETE FROM `tintuc` 
		  WHERE idTin = $idTin
		  ";
	require "dbCon.php";
	mysqli_query($con, $qr);
	mysqli_close($con);

}
function check_quotes($str)
{
    if(strpos($str,"'")){
        $stri = str_replace("'","''",$str);
        return $stri;
    }
    else if(strpos($str,'"')){
        $stri = str_replace('"','""',$str);
        return $stri;
    }
    else return $str;
}
// Create Reviews
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
	$qr = "SELECT * FROM `reviews`";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
// Edit review
function saveReview($id, $params)
{
	extract($params);
	if(isset($rating)){
		if(isset($isShow)){
			$qr = "UPDATE `reviews`
			SET rating = '$rating', isShow = $isShow
			WHERE id = $id
			";
		}
		else{
			$qr = "UPDATE `reviews`
			SET rating = '$rating'
			WHERE id = $id
			";
		}
	}
	else{
		if(isset($isShow)){
			$qr = "UPDATE `reviews`
			SET isShow = $isShow
			WHERE id = $id
			";
		}
		else{
			return;
		}
	}
    require "dbCon.php";
    $result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}
// Xoá reviews
function delReview($id)
{
	$qr ="DELETE FROM `reviews` 
		  WHERE id = $id
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}

// Get feedbacks
function getFeedbacks(){
	$qr = "SELECT * FROM `feedbacks`";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}

// Store Image
function storeImageFeedback($urlImage){
	$qr = "INSERT INTO `feedbacks`
	VALUES(null,'$urlImage',null,null,0)
	";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}

function updateFeedback($id,$isShow){
	$qr = "UPDATE `feedbacks`
			SET isShow = $isShow WHERE id = $id";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}

function delFeedback($id)
{
	$qr ="DELETE FROM `feedbacks` 
		  WHERE id = $id
		  ";
	require "dbCon.php";
	$result = mysqli_query($con, $qr);
	mysqli_close($con);
	return $result;
}

?>