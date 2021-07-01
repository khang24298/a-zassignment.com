
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
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="images/logo.svg" alt="Marshmallow"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="images/logo-dark.svg" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?p=0">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?p=3">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?p=4">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-success" href="tel:0354488880">0354.488.880</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div class="banner-title">
												<h3 class="font-weight-medium">We Help Power
												Millions Of Businesses 
												in 100+ Countries
											</h3>
										</div>
										<p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

											<br>
											Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
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
							<h5 class="text-dark">We’re offering</h5>
							<h3 class="font-weight-medium text-dark mb-5">Creative Digital Agency</h3>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/integrated-marketing.svg" alt="integrated-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Integrated 
									Marketing
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/design-development.svg" alt="design-development" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Design & 
									Development
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/digital-strategy.svg" alt="digital-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
					</div>
					<div class="row" data-aos="fade-up">
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/digital-marketing.svg" alt="digital-marketing" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Digital 
									Marketing
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/growth-strategy.svg" alt="growth-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Growth 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
								</p>
							</div>
						</div>
						<div class="col-sm-4 text-center text-lg-left">
							<div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<img src="images/saving-strategy.svg" alt="saving-strategy" data-aos="zoom-in">
								<h6 class="text-dark mb-3 mt-4 font-weight-medium">Saving 
									Strategy
								</h6>
								<p>Lorem ipsum dolor sit amet, 
									pretium pretium tempor.Lorem ipsum 
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
							<h5 class="text-dark">Our work process</h5>
							<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
							<h5 class="text-dark mb-3">Imagination will take us everywhere</h5>
							<p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br> 
								pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
							</p>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
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
								<h3 class="font-weight-medium text-dark ">Let's See Our Latest Project</h3>
								<div><a href="#" class="btn btn-outline-primary">View more</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-5" data-aos="fade-up">
					<div class="owl-carousel-projects owl-carousel owl-theme">
						<div class="item">
							<img src="images/carousel/slider1.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider2.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider3.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider4.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider5.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider1.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider2.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider3.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider4.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider5.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider1.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider2.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider3.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider4.jpg" alt="slider">
						</div>
						<div class="item">
							<img src="images/carousel/slider5.jpg" alt="slider">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row pt-5 mt-5 pb-5 mb-5">
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/satisfied-client.svg" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
									<h5 class="text-dark mb-0">Satisfied clients</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="images/finished-project.svg" alt="satisfied-client" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
									<h5 class="text-dark mb-0">Finished Project</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
								<img src="images/team-members.svg" alt="Team Members" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
									<h5 class="text-dark mb-0">Team Members</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
								<img src="images/our-blog-posts.svg" alt="Our Blog Posts" class="mr-3">
								<div>
									<h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
									<h5 class="text-dark mb-0">Our Blog Posts</h5>
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
							<p class="font-weight-bold mb-3">Testimonials</p>
							<h3 class="font-weight-medium">Our customers are our <br>biggest fans</h3>
							
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
                                                        <label for="star5" >☆</label>
                                                        <input  type="radio" value="4" <?php echo ($row['rating'] == 4) ? 'checked' : ''?> class="radio-btn hide"/>
                                                        <label for="star4" >☆</label>
                                                        <input  type="radio" value="3" <?php echo ($row['rating'] == 3) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star3" >☆</label>
                                                        <input type="radio" value="2" <?php echo ($row['rating'] == 2) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star2" >☆</label>
                                                        <input  type="radio" value="1" <?php echo ($row['rating'] == 1) ? 'checked' : ''?> class="radio-btn hide" />
                                                        <label for="star1" >☆</label>
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
			<section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="d-sm-flex justify-content-between align-items-center">
								<img src="images/deloit.svg" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img src="images/erricson.svg" alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img src="images/netflix.svg" alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img src="images/instagram.svg" alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img src="images/coinbase.svg" alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
							</div>
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
									<h3 class="font-weight-medium text-dark ">Checkout Pricing Plan</h3>
									<h5 class="text-dark ">Lorem ipsum dolor sit amet, consectetur pretium pretium tempor. Lorem ipsum dolor </h5>
								</div>
								<div class="mb-5 mb-lg-0 mt-3 mt-lg-0">
									<div class="d-flex align-items-center">
										<p class="mr-2 font-weight-medium monthly text-active check-box-label">Monthly</p>
										<label class="toggle-switch toggle-switch">
										<input type="checkbox" checked  id="toggle-switch">
										<span class="toggle-slider round"></span>
										</label>
										<p class="ml-2 font-weight-medium yearly check-box-label">Yearly</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row"  data-aos="fade-up" data-aos-offset="-300">
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="images/starter.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Starter Business</h6>
								<h1 class="text-amount mb-4 mt-2">$23</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box selected">
								<img src="images/proffessional.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Professional</h6>
								<h1 class="text-amount mb-4 mt-2">$45</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-primary">Puchase Now</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pricing-box">
								<img src="images/premium.svg" alt="starter">
								<h6 class="font-weight-medium title-text">Premium</h6>
								<h1 class="text-amount mb-4 mt-2">$87</h1>
								<ul class="pricing-list">
									<li>Create a free website</li>
									<li>Connect Domain</li>
									<li>Business and ecommerce</li>
									<li>Idea for smaller professional websites</li>
									<li>Web space</li>
								</ul>
								<a href="#" class="btn btn-outline-primary">Puchase Now</a>
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
							<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Review</h3>
							<h5 class="text-dark mb-5">How about your experience with us?</h5>
							<form action="admin/reviews/xuly.php" method="POST">
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
											<label for="star5" >☆</label>
											<input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
											<label for="star4" >☆</label>
											<input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
											<label for="star3" >☆</label>
											<input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
											<label for="star2" >☆</label>
											<input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
											<label for="star1" >☆</label>
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
		</div>
        <div class="contact-area">
             <!-- Số điện thoại -->
             <div class="hotline-phone-ring-wrap">
                    <div class="hotline-phone-ring">
                        <div class="hotline-phone-ring-circle"></div>
                        <div class="hotline-phone-ring-circle-fill"></div>
                        <div class="hotline-phone-ring-img-circle">
                        <a href="tel:0354488880" class="pps-btn-img">
                            <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
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
                            <img class="zalo-icon" src="https://chanhtuoi.vn1.vdrive.vn/uploads/2020/10/logo-zalo.jpg" alt="Gọi điện thoại" width="50%">
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
		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<address>
								<p>143 castle road 517</p>
								<p class="mb-4">district, kiyev port south Canada</p>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+3 123 456 789</p>
									<a href="mailto:info@yourmail.com" class="footer-link">info@yourmail.com</a>
								</div>
								<div class="d-flex align-items-center">
									<p class="mr-4 mb-0">+1 222 345 342</p>
									<a href="mailto:Marshmallow@yourmail.com" class="footer-link">Marshmallow@yourmail.com</a>
								</div>
							</address>
							<div class="social-icons">
								<h6 class="footer-title font-weight-bold">
									Social Share
								</h6>
								<div class="d-flex">
									<a href="#"><i class="mdi mdi-github-circle"></i></a>
									<a href="#"><i class="mdi mdi-facebook-box"></i></a>
									<a href="#"><i class="mdi mdi-twitter"></i></a>
									<a href="#"><i class="mdi mdi-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4">
									<h6 class="footer-title">Social Share</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Home</a></li>
										<li><a href="#" class="footer-link">About</a></li>
										<li><a href="#" class="footer-link">Services</a></li>
										<li><a href="#" class="footer-link">Portfolio</a></li>
										<li><a href="#" class="footer-link">Contact</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Product</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Digital Marketing</a></li>
										<li><a href="#" class="footer-link">Web Development</a></li>
										<li><a href="#" class="footer-link">App Development</a></li>
										<li><a href="#" class="footer-link">Design</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h6 class="footer-title">Company</h6>
									<ul class="list-footer">
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">Investors</a></li>
										<li><a href="#" class="footer-link">Partners</a></li>
										<li><a href="#" class="footer-link">FAQ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center">
							<img src="images/logo.svg" alt="logo" class="mr-3">
							<p class="mb-0 text-small pt-1">© 2019-2020 <a href="https://www.bootstrapdash.com" class="text-white" target="_blank">BootstrapDash</a>. All rights reserved.</p>
						</div>
						<div>
							<div class="d-flex">
								<a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>          
								<a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
								<a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="vendors/base/vendor.bundle.base.js"></script>
		<script src="vendors/owl.carousel/js/owl.carousel.js"></script>
		<script src="vendors/aos/js/aos.js"></script>
		<script src="vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="js/template.js"></script>
	</body>
