<?php
    require "../../lib/quantri.php";
    if (isset($_POST['upload-image'])){
        $urlImage=$_POST['urlImage'];
        storeImageFeedback($urlImage);
        header('location: ../nikki_admin.php?p=feedback');
    }

    if(isset($_POST['isShow'])){
        $id = $_POST['id'];
        $show = $_POST['isShow'];
        updateFeedback($id,$show);
    }
    if(!isset($_POST['isShow']) && isset($_POST['id'])){
        $id = $_POST['id'];
        delFeedback($id,$show);
    }

?>