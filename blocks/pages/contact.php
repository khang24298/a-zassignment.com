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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3391816069875!2d105.78345205152964!3d20.979036694779033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acd27916caa5%3A0xd1a865aa1cacdd14!2zMTAyIFRy4bqnbiBQaMO6LCBQLiBN4buZIExhbywgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625337607167!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Get in touch</h4>
                    <p>Liên hệ ngay với chúng tôi để giải đáp các thắc mắc của bạn nhé!</p>
                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Địa chỉ:</h6>
                        <h4>102 Trần Phú, Hà Đông, Hà Nội</h4>
                    </div>
                    <div class="single-contact-info ">
                        <h6 class="">Hotline/Zalo/Whatapps &nbsp;:&nbsp; 035.448.8880</h6>
                        <h6 class="">Gmail&nbsp;:&nbsp; azassignment247@gmail.com</h6>
                    </div>
                    
        
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Liên hệ để được hỗ trợ</h4>

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
                                <a class="btn nikki-btn mt-15" href="javascript:sendEmail();" >Gửi</a>
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
