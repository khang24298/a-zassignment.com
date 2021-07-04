<?php
//import file database
require "lib/dbCon.php";
require "lib/trangchu.php";
?>
<?php 
if(isset($_GET["p"])){
    $p = $_GET["p"];
}
else $p="";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>A-Z Assignment - Dịch vụ viết thuê luận văn</title>

    <!-- Favicon -->
    
 
    <!-- Core Stylesheet -->
    <?php 
            if( isset($p) && in_array($p,['0','1','2','3','4'])){
                echo "<link rel='stylesheet' href='style.css'>";
                echo "<link rel='stylesheet' href='css/layout.css'>";
            }
            else{
                echo "<link rel='stylesheet' href='css/style_landing.css'>";
            }
        ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<!-- Header Start-->
    <div class="_header">
        <?php 
                require "blocks/layouts/header.php";
        ?>
       
    </div>
<!-- Header End -->

<!-- Content Start -->
    <div class="_body" style="margin-top:7em;">
        <?php
            switch ($p) {
                case '0':
                    require "blocks/pages/master.php";
                    break;
                case '1':
                    require "blocks/pages/category.php";
                    break;
                case '2':
                    require "blocks/pages/detail.php";
                    break;
                case '3':
                    require "blocks/pages/aboutus.php";
                    break;
                case '4':
                    require "blocks/pages/contact.php";
                    break;
                // case '5':
                //     require "blocks/pages/login.php";
                //     break;
                // case '6':
                //     require "blocks/pages/register.php";
                //     break;
                default:
                    require "blocks/pages/landing.php";
                    break;
            }
        ?>
    </div>
<!-- Content End -->

<!-- Footer Start -->
    <div class="_footer">
        <?php 
            require "blocks/layouts/footer.php";
        ?>
    </div>
<!-- Footer End -->
    


    <!-- ##### All Javascript Script ##### -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <?php 
    if($p == 2){
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btnSend").click(function () {
                $.ajax({
                    url: 'blocks/pages/process.php',
                    type: 'POST',
                    data: {
                        idTin: <?php echo $idTin ?? "" ?>,
                        content: $("#message").val(),
                        email: $("#contact-email").val(),
                        user: $("#contact-name").val(),
                    },
                    success: function (result) {
                        $("#comment").html(result);
                    },
                    error: function (xhr, desc, err) {
                        console.log("error");
                    }
                });
            });
        });
    </script>
    <?php } 
    ?>
   
</body>

</html>