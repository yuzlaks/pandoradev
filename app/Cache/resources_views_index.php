<?php class_exists('Template') or exit; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo htmlentities(asset('img/favicon.png'), ENT_QUOTES, 'UTF-8') ?>" type="image/png">
        <title>Pandoradev</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo htmlentities(asset('css/bootstrap.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/linericon/style.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('css/font-awesome.min.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/owl-carousel/owl.carousel.min.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/lightbox/simpleLightbox.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/nice-select/css/nice-select.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/animate-css/animate.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('vendors/flaticon/flaticon.css'), ENT_QUOTES, 'UTF-8') ?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo htmlentities(asset('css/style-home.css'), ENT_QUOTES, 'UTF-8') ?>">
        <link rel="stylesheet" href="<?php echo htmlentities(asset('css/responsive.css'), ENT_QUOTES, 'UTF-8') ?>">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="<?php echo htmlentities(asset('img/icon.png'), ENT_QUOTES, 'UTF-8') ?>" width="25" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="services.html">Services</a>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="price.html">Pricing</a> 
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<!-- <li class="nav-item"><a href="#" class="tickets_btn">Free Trial</a></li> -->
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="banner_content">
								<h2>Pandoradev.</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt.</p>
								<a class="banner_btn" href="#">Mulai Kursus</a>
								<a class="banner_btn2" href="#">Forum</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="home_left_img">
								<img class="img-fluid" src="<?php echo htmlentities(asset('img/icon.png'), ENT_QUOTES, 'UTF-8') ?>" width="200px" alt="">
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Work Area =================-->
        <section class="work_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>How It work for you</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<div class="work_inner row">
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-screen"></i>
        					<a href="#"><h4>Stunning Visuals</h4></a>
        					<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-code"></i>
        					<a href="#"><h4>Stunning Visuals</h4></a>
        					<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="work_item">
        					<i class="lnr lnr-clock"></i>
        					<a href="#"><h4>Stunning Visuals</h4></a>
        					<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Work Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pandoracode Mint</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Unlimited Colors</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Unique Features</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="edge-tab" data-toggle="tab" href="#edge" role="tab" aria-controls="edge" aria-selected="false">Unique Features</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>Framework PHP Mini</h3>
										<h6>Cepat, ringan dan cocok untuk pemula.</h6>
										<p>Dibangun untuk kerja solo maupun tim, kami memanfaatkan beberapa <b>library</b> yang sudah ada, terlebih Anda bisa menambahkan <b>library</b> baru sesuai dengan keinginan Anda.</p>
										<a class="main_btn" href="<?php echo htmlentities(url('docs-pmint'), ENT_QUOTES, 'UTF-8') ?>">Dokumentasi</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="edge" role="tabpanel" aria-labelledby="edge-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
        
        <!--================Screen Area =================-->
        <section class="screen_area text-center p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Unique Screens that work perfectly</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<img class="img-fluid" src="img/banner/home-left-1.png" alt="">
        	</div>
        </section>
        <!--================End Screen Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<div class="row made_life_text">
						<div class="col-lg-6">
							<div class="left_side_text">
								<h3>We’ve made a life <br />that will change you</h3>
								<h6>We are here to listen from you deliver exellence</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								<a class="main_btn" href="#">Get Started Now</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="chart_img">
								<img class="img-fluid" src="img/browser.png" alt="">
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
        
        <!--================Price Area =================-->
        <section class="price_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Choose Your Price Plan</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<div class="price_inner row">
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Real Basic</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">2.5 GB Space</a></li>
        							<li><a href="#">Secure Online Transfer</a></li>
        							<li><a href="#">Unlimited Styles</a></li>
        							<li><a href="#">Customer Service</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 39 <span class="month">Per <br />Month</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Real Standard</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">10 GB Space</a></li>
        							<li><a href="#">Secure Online Transfer</a></li>
        							<li><a href="#">Unlimited Styles</a></li>
        							<li><a href="#">Customer Service</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 69 <span class="month">Per <br />Month</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="price_item">
        					<div class="price_head">
        						<h4>Real Ultimate</h4>
        					</div>
        					<div class="price_body">
        						<ul class="list">
        							<li><a href="#">Unlimited Space</a></li>
        							<li><a href="#">Secure Online Transfer</a></li>
        							<li><a href="#">Unlimited Styles</a></li>
        							<li><a href="#">Customer Service</a></li>
        						</ul>
        					</div>
        					<div class="price_footer">
        						<h3><span class="dlr">$</span> 99 <span class="month">Per <br />Month</span></h3>
        						<a class="main_btn" href="#">Get Started</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Price Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Feedback from Customers</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        		</div>
        		<div class="testi_slider owl-carousel">
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-1.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-2.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-1.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-2.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-1.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<div class="media">
								<div class="d-flex">
									<img src="img/testimonials/testi-2.png" alt="">
								</div>
								<div class="media-body">
									<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
									<h4>Mark Alviro Wiens</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
        <!--================Made Life Area =================-->
        <section class="made_life_area made_white p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<div class="row made_life_text">
						<div class="col-lg-6">
							<div class="chart_img">
								<img class="img-fluid" src="img/banner/home-left-1.png" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="left_side_text">
								<h3>We’ve made a life <br />that will change you</h3>
								<h6>We are here to listen from you deliver exellence</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								<a class="main_btn" href="#">Get Started Now</a>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner">
					<h2>Got Impressed to our features?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
					<a class="banner_btn2" href="#">Request Free Demo</a>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo htmlentities(asset('js/jquery-3.2.1.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/popper.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/bootstrap.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/stellar.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/lightbox/simpleLightbox.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/nice-select/js/jquery.nice-select.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/isotope/imagesloaded.pkgd.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/isotope/isotope-min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/owl-carousel/owl.carousel.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/jquery.ajaxchimp.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/counter-up/jquery.waypoints.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('vendors/counter-up/jquery.counterup.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/mail-script.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo htmlentities(asset('js/gmaps.min.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
        <script src="<?php echo htmlentities(asset('js/theme.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
    </body>
</html>