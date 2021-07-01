<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include $_SERVER['DOCUMENT_ROOT']."/PHPMailer-master/src/PHPMailer.php";
include $_SERVER['DOCUMENT_ROOT']."/PHPMailer-master/src/Exception.php";
include $_SERVER['DOCUMENT_ROOT']."/PHPMailer-master/src/OAuth.php";
include $_SERVER['DOCUMENT_ROOT']."/PHPMailer-master/src/POP3.php";
include $_SERVER['DOCUMENT_ROOT']."/PHPMailer-master/src/SMTP.php";

?>
<!-- ##### Google Maps Start ##### -->
<div class="map-area">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0942288883903!2d105.79431371445396!3d20.98885959451621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc7f3dca9e5%3A0x30cf5a97471f1064!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBIw6AgTuG7mWkgKEhBTlUp!5e0!3m2!1svi!2s!4v1579744889243!5m2!1svi!2s" allowfullscreen=""></iframe>
    <!-- <iframe src="https://www.google.com/maps/place/Trường+Đại+Học+Hà+Nội+(HANU)/@20.9888596,105.7943137,17z/data=!3m1!4b1!4m5!3m4!1s0x3135acc7f3dca9e5:0x30cf5a97471f1064!8m2!3d20.9888546!4d105.7965024" allowfullscreen></iframe>
    
 -->
</div>
<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Get In Touch</h4>
                    <p>Feel free to send us any comments, recommendations and contributions. We'd love to hear from you.</p>
                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Location:</h6>
                        <h4>Km9 Nguyen Trai, Thanh Xuan, Hanoi</h4>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Email:</h6>
                        <table id="email">
                        <tr>
                                <td>Dang Quoc Long (Instructor) :</td>
                                <td>longdq@hanu.edu.vn</td>
                            </tr>    
                        <tr>
                                <td>Nguyen Thi Huong (Leader) :</td>
                                <td>huongnguyenda14ydka@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Nguyen Thi Hong Nhung :</td>
                                <td>hongngungqp1999@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Le Thu Trang :</td>
                                <td>Ltrangg99@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Masaki Kurata :</td>
                                <td>souda2dz@stu.kanazawa-u.ac.jp</td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>   
                        </table>
                    </div>
        
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Contact Form</h4>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <!-- <button type="button" class="btn nikki-btn mt-15"> -->
                                <a class="btn nikki-btn mt-15" href="javascript:sendEmail();" >Submit</a>
                            <!-- </button> -->
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        #email tr td{
            padding: 10px;
            font-size: 16px;
        }
        #email tr td:last-child{
            font-weight: bold;
        }
    </style>
</section>
<script type="text/javascript">
    function sendEmail(){
        window.open('mailto:azassignment247@gmail.com');
        return;
    }
</script>
<!-- ##### Contact Area End ##### -->
