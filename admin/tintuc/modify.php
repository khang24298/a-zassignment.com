<?php
require "../../lib/quantri.php";
?>
<?php

if(isset($_POST["modify"]))
{
    $idTin    =$_POST["idTin"];
    $Title    =check_quotes($_POST["Title"]);
    $Title_KD =vn_to_str($Title);
    $TomTat   =check_quotes($_POST["TomTat"]);
    $Content  =$_POST["editor"];
    $idTL     =$_POST["TenTL"];
    $urlHinh  =$_POST["fileToUpload"];
    $Author   =check_quotes($_POST["Author"]);
    $SoLuotXem=$_POST["SoLuotXem"];
    $ThuTu    =$_POST["ThuTu"];
    suaTinTuc($Title,$Title_KD,$TomTat,$Content,$idTL,$urlHinh,$ThuTu, $SoLuotXem,$Author,$idTin);
}
?>
<script type="text/javascript">
        window.location.href="../nikki_admin.php?p=tintuc";
</script>

