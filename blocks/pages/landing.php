
	<head>
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendors/aos/css/aos.css">
		<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
		<link rel="stylesheet" href="css/style_landing.css">
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
			float:left;
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
			width: 1.3em;
			cursor: pointer;
			color: #000;
			font-size: 1.4em;
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
			content: "\2605";
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
		content: "";
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
	</style>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50" style="margin-top:-3em">
		<div id="mobile-menu-overlay"></div>

		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
											<h1 class="font-weight-medium" style="font-size:5em">A-ZASSIGNMENT</h1>
										</div>
										<p class="mt-3">
											D???ch v??? h??? tr??? vi???t h???c thu???t ti???ng Anh, ti???ng Vi???t 24/7
											<br>
											- Gi???i ph??p t???i ??u cho t???t c??? v???n ????? h???c thu???t li??n quan ?????n ti???ng Anh, ti???ng Vi???t c???a b???n!
										</p>
										<a href="?p=2&idTin=119" class="btn btn-secondary mt-3">Chi ti???t</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="images/group.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-services" id="services">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="font-weight-medium text-dark mb-5">D???ch v???</h1>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-md-6 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/integrated-marketing.svg" alt="integrated-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Assignment/Essay/Presentation
								</h6>
								<p>H??y cho ch??ng t??i bi???t b???n c?? deadline g??, ch??ng t??i s??? h??? tr??? b???n m???t c??ch t???n t??m nh???t. B???n kh??ng c??n ph???i quan t??m ?????n deadline n???a, h??y ????? AZA lo.

								</p>
							</div>
						</div>
						
						<div class="col-md-6 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/digital-strategy.svg" alt="digital-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">K-12 Homework/Assignment

								</h6>
								<p>Kh??ng ch??? h??? tr??? b???n, ch??ng t??i c??n c?? th??? gi??p ????? ng?????i th??n v?? b???n b?? c???a b???n. H??y gi???i thi???u ch??ng t??i, ????y s??? l?? m??n qu?? tuy???t v???i nh???t b???n d??nh cho h???

								</p>
							</div>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-md-6 text-center text-lg-left">
							<div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/growth-strategy.svg" alt="growth-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Thesis/Dissertation

								</h6>
								<p>????y l?? nh???ng b??i t???p l???n v?? quan tr???ng ????ng kh??ng n??o. Ch??ng t??i s??? ?????ng h??nh c??ng b???n ????? gi???i quy???t ch??ng, ?????ng lo!

								</p>
							</div>
						</div>
						<div class="col-md-6 text-center text-lg-left">
							<div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/saving-strategy.svg" alt="saving-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Online exam/Test/Quiz

								</h6>
								<p>B??y gi??? b???n c?? th??? ng??? y??n gi???c khi ng??y thi ?????n g???n r???i ????. Ch??ng t??i s??? gi??p b???n ?????t ???????c ??i???m s??? mong mu???n.

								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our-process" id="about">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up">
							<h1 class="font-weight-medium text-dark">T???i sao l???i ch???n A-ZA?</h1>
							<p class="font-weight-medium mb-4">A-Z Assignment cam k???t mang l???i ch???t l?????ng ph???c v??? t???t nh???t. 
								<br>C??c s???n ph???m vi???t 100% ?????c nh???t. ?????m b???o b???o h??nh n???u c?? l???i Plagiarism ?????n khi kh??ch h??ng h??i l??ng.
							</p>
							<div class="d-flex justify-content-start mb-1">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Kh??ng ?????o v??n</p>
							</div>
							<div class="d-flex justify-content-start mb-1">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Uy t??n</p>
							</div>
							<div class="d-flex justify-content-start mb-1">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Chuy??n nghi???p</p>
							</div>
							<div class="d-flex justify-content-start mb-1">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">B???o m???t</p>
							</div>
							<div class="d-flex justify-content-start mb-1">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Gi?? c??? t???t nh???t th??? tr?????ng</p>
							</div>
						</div>
						<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src="images/idea.png" alt="idea" class="img-fluid">
						</div>
					</div>
				</div>
			</section>
			<section class="our-projects" id="projects">
				<div class="container">
					<div class="row mb-5">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<h1 class="font-weight-medium text-dark ">A-ZA lu??n s???n s??ng h??? tr??? b???n</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-5" data-aos="fade-up">
					<div class="owl-carousel-projects owl-carousel owl-theme">
						<?php 
						$feedbacks = getFeedbacks();
						while ($feed = mysqli_fetch_array($feedbacks)){
						?>
						<div class="item">
							<img src="<?php echo $feed['urlImage']?>" alt="slider">
						</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="container">
					<div class="row pt-5 mt-5 pb-5 mb-5">
						<div class="col-sm-4">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/satisfied-client.svg" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
									<h5 class="text-dark mb-0">Kh??ch h??ng h??i l??ng</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="images/finished-project.svg" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span>+</h4>
									<h5 class="text-dark mb-0">D??? ??n ???? ho??n th??nh</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/team-members.svg" alt="Team Members" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
									<h5 class="text-dark mb-0">Th??nh vi??n</h5>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<section class="testimonial" id="testimonial">
				<div class="container">
					<div class="row  mt-md-0 mt-lg-4">
						<div class="col-sm-6 text-white" data-aos="fade-up">
							<h1 class="font-weight-medium">Kh??ch h??ng n??i v??? <br> A-ZA</h1>
							
						</div>
						<div class="col-sm-6" data-aos="fade-up">
							<div id="testimonial-flipster">
								<ul>
									<?php 
										 $reviews = getReviews();
										 while ($row = mysqli_fetch_array($reviews)) {
									?>
									<li>
										<div class="testimonial-item">
											<img src="images/testimonial/testimonial4.jpg" alt="icon" class="testimonial-icons">
											<p><?php echo $row['content'] ?>
											</p>
											<h6 class="testimonial-author"><?php echo $row['name']?></h6>
											<div class="txt-center">
                                                <form>
                                                    <div class="rating">
                                                        <input type="radio" value="5" <?php echo ($row['rating'] == 5) ? 'checked' : ''?> class="radio-btn hide " />
                                                        <label for="star5" >???</label>
                                                        <input  type="radio" value="4" <?php echo ($row['rating'] == 4) ? 'checked' : ''?> class="radio-btn hide"/>
                                                        <label for="star4" >???</label>
                                                        <input  type="radio" value="3" <?php echo ($row['rating'] == 3) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star3" >???</label>
                                                        <input type="radio" value="2" <?php echo ($row['rating'] == 2) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star2" >???</label>
                                                        <input  type="radio" value="1" <?php echo ($row['rating'] == 1) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star1" >???</label>
                                                        <div class="clear"></div>
                                                    </div>
                                                </form>
                                            </div>
										</div>
									</li>
									<?php 
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contactus" id="contact">
				<div class="container">
					<div class="row mb-5 pb-5">
						<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
							<img src="images/contact.jpg" alt="contact" class="img-fluid">
						</div>
						<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
							<h1 class="font-weight-medium text-dark mt-5 mt-lg-0">Tr???i nghi???m c???a b???n v???i A-za nh?? th??? n??o? </h1>
							<h5 class="text-dark mb-5">H??y chia s??? v???i ch??ng t??i!</h5>
							<form action="blocks/pages/process.php" method="POST">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Name*">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control" id="mail" placeholder="Email*">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea name="content" id="content" class="form-control" placeholder="Message*" rows="5"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="rating"><b>Rating</b></label>
										<div class="txt-center">
										<div class="rating">
											<input id="star5" name="star" type="radio" value="5" class="radio-btn hide"/>
											<label for="star5" >???</label>
											<input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
											<label for="star4" >???</label>
											<input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
											<label for="star3" >???</label>
											<input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
											<label for="star2" >???</label>
											<input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
											<label for="star1" >???</label>
											<div class="clear"></div>
										</div>
										</div>
									</div>
									<div class="col-sm-6 float-right">
										<button type="submit" id="send" name="sendReview" class="btn btn-secondary">SEND</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			<section class="pricing-list" id="plans">
				<div class="container">
					<div class="row" data-aos="fade-up" data-aos-offset="-500">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center mb-2">
								<div>
									<h1 class="font-weight-medium text-dark ">B???ng gi?? d???ch v???</h1>
									<h5 class="text-dark ">GI?? C??? T???T NH???T TH??? TR?????NG - UY T??N - B???O M???T</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="row"  data-aos="fade-up" data-aos-offset="-300">
						<div class="col-sm-3">
							<div class="pricing-box">
								<img src="images/pricing-box-1.png" alt="starter">
								<h6 class="font-weight-medium title-text">Assignment/Coursework</h6>
								<h1 class="text-small text-amount mb-4 mt-2">85,000VND-150,000VND/100 words</h1>
								<ul class="pricing-list text-left">
								<h5>M???c gi?? ch??nh x??c s??? ph??? thu???c v??o:</h5>
									<li>1. Deadline</li>
									<li>2. L??nh v???c vi???t</li>
									<li>3. ????? kh?? c???a c??u h???i/ ????? b??i/ ????? t??i</li>
									<li>4. Nhu c???u c???a kh??ch h??ng</li>
								</ul>
								<a style="position:absolute;right:20%;bottom:5%" href="https://zalo.me/0354488880" target="_blank" class="btn btn-outline-primary">Book l???ch ngay</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="pricing-box selected">
								<img src="images/pricing-box-2.png" alt="starter">
								<h6 class="font-weight-medium title-text">Presentation/powerpoint <br><span class="font-italic" style="font-size:0.7em">(bao g???m script n??i *)</span></h6>
								<h1 class="text-small text-amount mb-4 mt-2">20,000VND-50,000VND/slide</h1>
								<ul class="pricing-list text-left">
								<h5>M???c gi?? ch??nh x??c s??? ph??? thu???c v??o:</h5>
									<li>1. Deadline</li>
									<li>2. L??nh v???c vi???t</li>
									<li>3. ????? kh?? c???a c??u h???i/ ????? b??i/ ????? t??i</li>
									<li>4. Nhu c???u c???a kh??ch h??ng</li>
								</ul>
								<a style="position:absolute;right:20%;bottom:5%" href="https://zalo.me/0354488880" target="_blank" class="btn btn-outline-primary">Book l???ch ngay</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="pricing-box">
								<img src="images/pricing-box-3.png" alt="starter">
								<h6 class="font-weight-medium title-text">Thesis/Dissertation</h6>
								<h1 class="text-small text-amount mb-4 mt-2">100,000VND-200,000VND/100 words</h1>
								<ul class="pricing-list text-left">
								<h5>M???c gi?? ch??nh x??c s??? ph??? thu???c v??o:</h5>
									<li>1. Deadline</li>
									<li>2. L??nh v???c vi???t</li>
									<li>3. ????? kh?? c???a c??u h???i/ ????? b??i/ ????? t??i</li>
									<li>4. Nhu c???u c???a kh??ch h??ng</li>
								</ul>
								<a style="position:absolute;right:20%;bottom:5%" href="https://zalo.me/0354488880" target="_blank" class="btn btn-outline-primary">Book l???ch ngay</a>
								
							</div>
						</div>
						<div class="col-sm-3">
							<div class="pricing-box">
								<img src="images/pricing-box-4.png" alt="starter">
								<h6 class="font-weight-medium title-text">Online exam/test/quiz</h6>
								<ul class="text-small text-amount mb-4 mt-2 text-left ">
									<li>
									Test d?????i 1 hour: <br>
									500,000VND - 1,000,000VND
									</li>

									<li>
									Test t??? 1-2 hours: <br>
									1,100,000VND - 1,500,000VND

									</li>

									<li>
									Test tr??n 2 hours: <br>
									> 1,600,000VND
									
									</li>
								</ul>
								<ul class="pricing-list text-left">
								<h5>M???c gi?? ch??nh x??c s??? ph??? thu???c v??o:</h5>
									<li>1. Deadline</li>
									<li>2. L??nh v???c vi???t</li>
									<li>3. ????? kh?? c???a c??u h???i/ ????? b??i/ ????? t??i</li>
									<li>4. Nhu c???u c???a kh??ch h??ng</li>
								</ul>
								<a style="position:absolute;right:20%;bottom:5%" href="https://zalo.me/0354488880" target="_blank" class="btn btn-outline-primary">Book l???ch ngay</a>

							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="clients pt-5 mt-5 mb-5"  data-aos="fade-up" data-aos-offset="-400">
				<div class="container">
				<h1 class="font-weight-medium text-dark border-bottom pb-2">C??c l??nh v???c h??? tr???</h1>
				<br>
					<div class="row">
						<div class="col-sm-12 support-area">
							<ul class="d-sm-flex justify-content-between align-items-center list-unstyled">
								<li alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
									<img src="images/support-economic.png" alt="">
									<p>Economics</p>
								</li>

								<li alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
									<img src="images/support-finance.png" alt="">
									<p>Finance</p>
								</li>

								<li alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
									<img src="images/support-accounting.png" alt="">
									<p>Accounting</p>
								</li>

								<li alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
									<img src="images/support-bm.png" alt="">
									<p>Business Management</p>
								</li>

								<li alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
									<img src="images/support-m&c.png" alt="">
									<p>Marketing and Communication</p>
								</li>
								
								<li alt="coinbase" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
									<img src="images/support-public-relation.png" alt="">
									<p>Public Relation</p>
								</li>

								<li alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
									<img src="images/support-h&t.png" alt="">
									<p>Hospitality and Tourism</p>
								</li>

								<li alt="coinbase" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
									...
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
        <div class="contact-area">
             <!-- S??? ??i???n tho???i -->
             <div class="hotline-phone-ring-wrap">
                    <div class="hotline-phone-ring">
                        <div class="hotline-phone-ring-circle"></div>
                        <div class="hotline-phone-ring-circle-fill"></div>
                        <div class="hotline-phone-ring-img-circle">
                        <a href="tel:0354488880" class="pps-btn-img">
                            <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="G???i ??i???n tho???i" width="50">
                        </a>
                        </div>
                    </div>
                    <div class="hotline-bar">
                        <a href="tel:0354488880">
                            <span class="text-hotline">0354.488.880</span>
                        </a>
                    </div>
                </div>
                <!-- Zalo -->
                <div class="hotline-phone-ring-wrap zalo-area">
                    <div class="hotline-phone-ring">
                        <div class="hotline-phone-ring-circle"></div>
                        <div class="hotline-phone-ring-img-circle">
                        <a href="https://zalo.me/0354488880" target="_blank" class="pps-btn-img zalo">
                            <img class="zalo-icon" src="https://netweb.vn/img/hotline/zalo.png" alt="G???i ??i???n tho???i" width="50%">
                        </a>
                        </div>
                    </div>
                </div>
                <!-- Whatapps -->
                <div class="hotline-phone-ring-wrap whatapps-area">
                  <div class="hotline-phone-ring">
                      <div class="hotline-phone-ring-circle"></div>
                      <div class="hotline-phone-ring-img-circle">
                        <a href="https://api.whatsapp.com/send?phone=+84354488880&amp;text=I am interested in your service" target="_blank" class="whatsapp">
                           <img class="whatsapp-icon" src="https://image.flaticon.com/icons/png/512/124/124034.png" alt="whatsapp">
                        </a>  
                      </div>

                                           
                  </div>
               </div>
        </div>
		<script type="text/javascript">
			$("#mobile-menu-overlay, .close-menu, .nav-link").click(function() {
			$('.collapse').toggleClass('show');
			$('body').removeClass("sidebar-overlay");
		});
		</script>
		<script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="js/template.js"></script>
	</body>
