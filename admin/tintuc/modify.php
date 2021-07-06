<?php
require "../../lib/quantri.php";
?>
<?php
$target_dir = "../../upload/images/";
$path = $_FILES['fileToUpload']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$target_file = $target_dir ."blog-img-edit_".round(microtime(true) * 1000).".".$ext;;
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
if(isset($_POST["modify"]))
{
    $idTin    =$_POST["idTin"];
    $Title    =check_quotes($_POST["Title"]);
    $Title_KD =vn_to_str($Title);
    $TomTat   =check_quotes($_POST["TomTat"]);
    $Content  =$_POST["editor"];
    $idTL     =$_POST["TenTL"];
    $urlHinh  =$target_file;
    $Author   =check_quotes($_POST["Author"]);
    $SoLuotXem=$_POST["SoLuotXem"];
    $ThuTu    =$_POST["ThuTu"];
    suaTinTuc($Title,$Title_KD,$TomTat,$Content,$idTL,$urlHinh,$ThuTu, $SoLuotXem,$Author,$idTin);
}
?>
<script type="text/javascript">
        window.location.href="../nikki_admin.php?p=tintuc";
</script>

