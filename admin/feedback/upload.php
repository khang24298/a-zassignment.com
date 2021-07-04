<?php
    require "../../lib/quantri.php";
    if (isset($_POST['upload-image'])){
        $target_dir = "../../upload/images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $urlImage='../upload/images/'.basename($_FILES["image"]["name"]);
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