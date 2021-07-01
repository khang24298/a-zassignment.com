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
    <title>Nikki - Blog &amp; Magazine Template</title>

    <!-- Favicon -->
    <?php 
    if($_SERVER['REQUEST_URI'] == "index.php"){
        echo "<link rel='stylesheet' href='vendors/mdi/css/materialdesignicons.min.cs'>
		<link rel='stylesheet' href='vendors/owl.carousel/css/owl.carousel.cs'>
		<link rel='stylesheet' href='vendors/owl.carousel/css/owl.theme.default.min.cs'>
		<link rel='stylesheet' href='vendors/aos/css/aos.cs'>
		<link rel='stylesheet' href='vendors/jquery-flipster/css/jquery.flipster.cs'>
		<link rel='stylesheet' href='css/style_landing.cs'>
        <style>
            .hotline-phone-ring-wrap {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 999999;
            }
            .hotline-phone-ring {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 110px;
            height: 110px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
            }
            .hotline-phone-ring-circle {
                width: 85px;
            height: 85px;
            top: 10px;
            left: 10px;
            position: absolute;
            background-color: transparent;
            border-radius: 100%;
            border: 2px solid #e60808;
            -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            opacity: 0.5;
            }
            .hotline-phone-ring-circle-fill {
                width: 55px;
            height: 55px;
            top: 25px;
            left: 25px;
            position: absolute;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
            animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            }
            .hotline-phone-ring-img-circle {
                background-color: #e60808;
                width: 33px;
            height: 33px;
            top: 37px;
            left: 37px;
            position: absolute;
            background-size: 20px;
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            }
            .hotline-phone-ring-img-circle .pps-btn-img {
                display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            }
            .hotline-phone-ring-img-circle .pps-btn-img img {
                width: 20px;
                height: 20px;
            }
            .hotline-bar {
            position: absolute;
            background: rgba(230, 8, 8, 0.75);
            height: 40px;
            width: 180px;
            line-height: 40px;
            border-radius: 3px;
            padding: 0 10px;
            background-size: 100%;
            cursor: pointer;
            transition: all 0.8s;
            -webkit-transition: all 0.8s;
            z-index: 9;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50px !important;
            /* width: 175px !important; */
            left: 33px;
            bottom: 37px;
            }
            .hotline-bar > a {
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            text-indent: 50px;
            display: block;
            letter-spacing: 1px;
            line-height: 40px;
            font-family: Arial;
            }
            .hotline-bar > a:hover,
            .hotline-bar > a:active {
            color: #fff;
            }
            @-webkit-keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform: rotate(0) scale(0.5) skew(1deg);
                -webkit-opacity: 0.1;
            }
            30% {
                -webkit-transform: rotate(0) scale(0.7) skew(1deg);
                -webkit-opacity: 0.5;
            }
            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                -webkit-opacity: 0.1;
            }
            }
            @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.6;
            }
            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.6;
            }
            100% {
                -webkit-transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.6;
            }
            }
            @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            }
            @media (max-width: 768px) {
            .hotline-bar {
                display: none;
            }
            }
            .zalo-icon{
                width: 35px !important;
                height: 35px !important;
                border-radius: 7px;
            }
            .zalo-area{
                bottom: 9vh!important;
            }
            /* .whatsapp {
               position: fixed;
               left: 1vw!important;
               bottom: 25vh!important;
            }  */
            .whatapps-area{
               bottom: 18vh!important;
            } 
            /* whatapps-area */
            .whatsapp-icon{
               width: 35px;
               border-radius: 10px;
            }
            th{
               text-align: center;
               font-weight: bold;
               font-size: 1.5em!important;
               padding:5px;
               color:#e85d04;
            }
            table,th, td{
               border: 1px solid black;
               vertical-align:middle;
               font-size: 1em;
            }
            tbody tr td:first-child{
               font-weight: bolder;
            }
     
		.txt-center {
		text-align: center;
		}
		.hide {
		display: none;
		}

		.clear {
		float: none;
		clear: both;
		}

		.rating {
			width: 90px;
			unicode-bidi: bidi-override;
			direction: rtl;
			text-align: center;
			position: relative;
		}

		.rating > label {
			float: right;
			display: inline;
			padding: 0;
			margin: 0;
			position: relative;
			width: 1.1em;
			cursor: pointer;
			color: #000;
		}

		.rating > label:hover,
		.rating > label:hover ~ label,
		.rating > input.radio-btn:checked ~ label {
			color: transparent;
		}

		.rating > label:hover:before,
		.rating > label:hover ~ label:before,
		.rating > input.radio-btn:checked ~ label:before,
		.rating > input.radio-btn:checked ~ label:before {
			content: '\2605';
			position: absolute;
			left: 0;
			color: #FFD700;
		}

		/* Switch button */
		.switch {
		position: relative;
		display: inline-block;
		width: 60px;
		height: 34px;
		}

		.switch input { 
		opacity: 0;
		width: 0;
		height: 0;
		}

		.slider {
		position: absolute;
		cursor: pointer;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #ccc;
		-webkit-transition: .4s;
		transition: .4s;
		}

		.slider:before {
		position: absolute;
		content: '';
		height: 26px;
		width: 26px;
		left: 4px;
		bottom: 4px;
		background-color: white;
		-webkit-transition: .4s;
		transition: .4s;
		}

		input:checked + .slider {
		background-color: #2196F3;
		}

		input:focus + .slider {
		box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
		-webkit-transform: translateX(26px);
		-ms-transform: translateX(26px);
		transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
		border-radius: 34px;
		}

		.slider.round:before {
		border-radius: 50%;
		}
	</style>";
    }
    ?>
    <?php 
            if( isset($p) && in_array($p,['6','5'])){
                echo "<link rel='icon' href='img/core-img/favicon.ico'>
                <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
                <link rel='stylesheet' href='assets/css/font-awesome.min.css'>
                <link rel='stylesheet' href='assets/css/themify-icons.css'>
                <link rel='stylesheet' href='assets/css/metisMenu.css'>
                <link rel='stylesheet' href='assets/css/owl.carousel.min.css'>
                <link rel='stylesheet' href='assets/css/slicknav.min.css'>
                <link rel='stylesheet' href='https://www.amcharts.com/lib/3/plugins/export/export.css' type='text/css' media='all' />
                <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css'>
                <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css'>
                <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css'>
                <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css'>
                <link rel='stylesheet' href='assets/css/typography.css'>
                <link rel='stylesheet' href='assets/css/default-css.css'>
                <link rel='stylesheet' href='assets/css/styles.css'>
                <link rel='stylesheet' href='assets/css/responsive.css'>
                ";
            }
    ?>
 
    <!-- Core Stylesheet -->
    <?php 
            if( isset($p) && in_array($p,['0','1','2','3','4'])){
                echo "<link rel='stylesheet' href='style.css'>";
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
            if( isset($p) && in_array($p,['0','1','2','3','4'])){
                require "blocks/layouts/header.php";
            }
        ?>
       
    </div>
<!-- Header End -->

<!-- Content Start -->
    <div class="_body" >
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
                case '5':
                    require "blocks/pages/login.php";
                    break;
                case '6':
                    require "blocks/pages/register.php";
                    break;
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
        if(isset($p) && in_array($p,['0','1','2','3','4'])){
            require "blocks/layouts/footer.php";
        }
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