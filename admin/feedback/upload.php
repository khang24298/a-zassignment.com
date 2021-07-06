<?php
    require "../../lib/quantri.php";
    if (isset($_POST['upload-image'])){
        $target_dir = "../../upload/images/";
        $path = $_FILES['image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $target_file = $target_dir ."fb-img_".round(microtime(true) * 1000).".".$ext;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $urlImage=$target_file;
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