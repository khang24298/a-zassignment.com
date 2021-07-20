<?php
	$idTL = $_GET["idTL"];
	xoaTheLoai($idTL);
	header("location:../admin/nikki_admin.php?p=theloai");
?>