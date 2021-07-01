<?php
require "../../lib/quantri.php";
?>
<?php
$target_dir = "../../upload/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["name"], $target_file);
//Thêm tin tức
if(isset($_POST["add"])){
    if ( ( $_POST["Title"] != "" ) && ( $_POST["TomTat"] != "" ) && ( $_POST["editor"] != "" ) && ( $_POST["Author"] != "" ) )
    {
        $Title=check_quotes($_POST["Title"]);
        $Title_KD=vn_to_str($Title);
        $TomTat=check_quotes($_POST["TomTat"]);
        $Content=$_POST["editor"];
        $idTL=$_POST["TenTL"];
        $urlHinh=basename($_FILES["fileToUpload"]["name"]);
        $Author=check_quotes($_POST["Author"]);
        $ThuTu = $_POST["ThuTu"];
        themTinTuc($Title, $Title_KD, $TomTat, $Content, $idTL, $urlHinh, $Author, $ThuTu);
        echo "Submitted successfully";
        //header("location:../nikki_admin.php?p=tintuc");
        ?>
        <script type="text/javascript">
            window.location.href="../nikki_admin.php?p=tintuc";
        </script>
        <?php
    }
    else{
        echo "<p style='color: red;font-weight: bold'>Please fill in all fields</p>";
        ?>
        <script>
            setTimeout(function (){window.location.href="../nikki_admin.php?p=tintuc";},3000);
        </script>
        <?php
    }
}
?>

