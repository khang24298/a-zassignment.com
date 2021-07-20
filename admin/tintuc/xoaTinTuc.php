<?php
	$idTin = $_GET["idTin"];
	xoaTinTuc($idTin);
	header("location:../admin/nikki_admin.php?p=tintuc");
?>