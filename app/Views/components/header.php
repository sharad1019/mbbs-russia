<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title><?= esc($meta_title) ?></title>
	<meta name="keywords" content="<?= esc($meta_keyword) ?>">
    <meta name="description" content="<?= esc($meta_desc) ?>">

	<meta property="og:site_name" content="<?= esc($meta_title) ?>">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= esc($meta_title) ?>">
    <meta property="og:description" content="<?= esc($meta_desc) ?>">
    <meta name="og:image" content="<?= base_url('images/assets/ogg.png') ?>">

	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#913BFF">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#913BFF">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

	<!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png') ?>" />
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/fonts/bootstrap-icons.css" />
	<link rel="stylesheet" href="assets/css/animate.min.css" />
	<link rel="stylesheet" href="assets/css/slick.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="assets/css/aos.css" />
	<link rel="stylesheet" href="assets/css/spacing.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
	<div class="main-page-wrapper">
		<!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

		<!-- Add your site or application content here -->


		<!-- preloader start -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="txt-loading">
					<span data-text-preloader="M" class="letters-loading">
						M
					</span>
					<span data-text-preloader="B" class="letters-loading">
						B
					</span>
					<span data-text-preloader="B" class="letters-loading">
						B
					</span>
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
					<span data-text-preloader="-" class="letters-loading">
						-
					</span>
					<span data-text-preloader="R" class="letters-loading">
						R
					</span>
					<span data-text-preloader="U" class="letters-loading">
						U
					</span>
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
					<span data-text-preloader="I" class="letters-loading">
						I
					</span>
					<span data-text-preloader="A" class="letters-loading">
						A
					</span>
				</div>
			</div>
		</div>
		<!-- preloader end  -->


		<!-- offcanvas start  -->
		<div class="offcanvas offcanvas-top theme-bg2" tabindex="-1" id="offcanvasTop">
			<div class="offcanvas-header">
				<a data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="bi bi-x-lg"></i>
				</a>
			</div>
			<div class="offcanvas-body">
				<!-- Fullscreen search -->
				<div class="search-wrap">
					<form method="get">
						<input type="search" class="main-search-input" placeholder="Search Your Keyword...">
					</form>
				</div>
				<!-- end fullscreen search -->
			</div>
		</div>
		<!-- offcanvas end  -->

		<!-- shopping-cart-bar start -->
		<div class="cart-menu-right cart-style-1 white-bg">
			<div class="close-icon float-right">
				<a href="javascript:void(0);"><i class="bi bi-x"></i></a>
			</div>
			<div class="dropdown-cart-products">
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Best color ful Lamp for ceiling</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="assets/img/product/cart/product-01.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Love color Table Lamp for room</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="assets/img/product/cart/product-02.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
				<div class="product">
					<div class="product__cart-details">
						<h5 class="product-title">
							<a href="shop.html">Best color ful Lamp for ceiling</a>
						</h5>

						<span class="cart-product-info">
							<span class="cart-product-qty">1</span>
							x $84.00
						</span>
					</div>

					<figure class="product__image-container">
						<a href="shop.html" class="product-img">
							<img src="assets/img/product/cart/product-03.jpg" alt="product">
						</a>
					</figure>
					<a href="#" class="remove-btn" title="Product remove"><i class="fal fa-times"></i></a>
				</div>
			</div>

			<div class="cart-total mb-15">
				<span>Total</span>
				<span class="cart-total-price">$160.00</span>
			</div>

			<div class="cart-action">
				<a href="cart.html" class="btn btn-primary">View Cart</a>
				<a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
						class="fal fa-long-arrow-right"></i></a>
			</div>
		</div>
		<!-- shopping-cart-bar end -->

		<!-- header-area start -->
		<header class="theme-main-menu theme-menu-one">
			<div class="promotion-area theme-bg2 py-1 text-center d-none d-lg-block">
				<a class="text-white fs-16 fw-medium" href="#"><b>Updates :</b> <span
						class="opacity-75 fs-16 fw-normal"> Admissions Open for MBBS in Russia 2026 | Limited Seats Available - </span> <b>Apply Now</b> <i class="bi bi-chevron-right"></i></a>
			</div>
			<div class="header-top">
				<div class="container-fluid">
					<ul
						class="topbar-content d-flex align-items-center justify-content-center justify-content-md-between">
						<li class="d-none d-md-inline-block"><a class="ht-promo d-none d-md-inline-block"
								href="price.html"><span>Welcome to</span>
								mbbsrussiaadmission.com</a></li>
						<li class="d-none d-xl-inline-block"><a class="ht-phone d-none d-xl-inline-block"
								href="tel:+91 93115 26985"><span><i class="bi bi-telephone"></i></span> +91 93115 26985</a>
						</li>
						<li class="d-none d-lg-inline-block"><a class="ht-email d-none d-lg-inline-block"
								href="#"><span><i class="bi bi-envelope"></i></span> info@mbbsrussiaadmission.com</a></li>
						<li>
							<div class="header-social-links d-md-flex d-none">
								<a href="#"><i class="bi bi-facebook"></i></a>
								<a href="#"><i class="bi bi-instagram"></i></a>
								<a href="#"><i class="bi bi-linkedin"></i></a>
								<a href="#"><i class="bi bi-twitter"></i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-header-area">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-between">
						<div class="col-md-auto col-6">
							<div class="logo-area">
								<a href="index.html"><img src="assets/img/logo/958561.png" width="200px" alt="Header-logo"></a>
							</div>
						</div>
						<div class="col-md-auto d-flex align-items-center justify-content-end d-lg-inline-block d-none">
							<div class="main-menu d-none d-lg-block">
								<nav id="mobile-menu">
									<ul class="menu-list">
										<li>
											<a href="#">
												Home
											</a>
											<ul class="sub-menu">
												<li>
													<a href="index.html">Home Style 1</a>
												</li>
												<li>
													<a href="index-2.html">Home Style 2</a>
												</li>
												<li>
													<a href="index-3.html">Home Style 3</a>
												</li>
												<li>
													<a href="index-4.html">Home Style 4</a>
												</li>

												<li>
													<a href="index-5.html">Home Style 5</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												Pages
											</a>
											<ul class="sub-menu">
												<li>
													<a href="about.html">About Us</a>
												</li>
												<li>
													<a href="#">Blog <span class="float-end"><i
																class="bi bi-chevron-down"></i></span></a>
													<ul class="sub-menu">
														<li>
															<a href="blog-grid.html">Blog Grid</a>
														</li>
														<li>
															<a href="blog-classic.html">Blog Classic</a>
														</li>
														<li>
															<a href="blog-details.html">Blog Details</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="#">Services <span class="float-end"><i
																class="bi bi-chevron-down"></i></span></a>
													<ul class="sub-menu">
														<li>
															<a href="services.html">Services</a>
														</li>
														<li>
															<a href="services-details.html">Services Details</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="#">Country <span class="float-end"><i
																class="bi bi-chevron-down"></i></span></a>
													<ul class="sub-menu">
														<li>
															<a href="country-list.html">Country List</a>
														</li>
														<li>
															<a href="country-details.html">Country Details</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="#">Shop <span class="float-end"><i
																class="bi bi-chevron-down"></i></span></a>
													<ul class="sub-menu">
														<li>
															<a href="shop.html">Shop</a>
														</li>
														<li>
															<a href="shop-details.html">Shop Details</a>
														</li>
														<li>
															<a href="cart.html">Cart</a>
														</li>
														<li>
															<a href="checkout.html">Checkout</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="#">Team <span class="float-end"><i
																class="bi bi-chevron-down"></i></span></a>
													<ul class="sub-menu">
														<li>
															<a href="team.html">Team</a>
														</li>
														<li>
															<a href="team-details.html">Team Details</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="error.html">Error - 404</a>
												</li>
												<li>
													<a href="testimonial.html">Testimonial</a>
												</li>
												<li>
													<a href="faq.html">Faq</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Courses</a>
											<ul class="sub-menu">
												<li>
													<a href="course-v1.html">Course V1</a>
												</li>
												<li>
													<a href="course-details.html">Course Details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>

									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-auto col-6">
							<div class="right-nav d-flex align-items-center justify-content-end">
								<div class="cart-menu d-none">
									<a class="shopping-cart mr-20" href="#">
										<i class="bi bi-bag"></i>
										<span class="badge">0</span>
									</a>
								</div>
								<div class="quote-btn d-lg-inline-block d-none ms-xxl-4 ms-3">
									<a href="contact.html" class="bs-btn">Appointment</a>
								</div>
								<div class="hamburger-menu ms-0 d-lg-none d-md-inline-flex">
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
										<div class="bar-3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</header>
		<!-- header-area end -->

		<!-- slide-bar start -->
		<div class="ht-menu-wrapper">
			<div class="ht-menu-area">
				<button class="ht-menu-toggle"><i class="bi bi-x-lg"></i></button>
				<div class="mobile-logo">
					<a href="index.html">
						<img src="assets/img/logo/logo-3.svg" alt="logo">
					</a>
				</div>
				<div class="mobile-menu-wrapper d-lg-none d-inline-block">
					<div class="mobile-menu"></div>
				</div>
				<div class="offset-widget mb-40">
					<div class="info-widget">
						<h4 class="offset-title mb-20">About Us</h4>
						<p class="mb-30">
							But I must explain to you how all this mistaken idea of denouncing pleasure and
							praising pain was born and will give you a complete account of the system and
							expound the actual teachings of the great explore
						</p>
					</div>
				</div>
				<div class="offset-widget mb-30 pr-10">
					<div class="info-widget info-widget2">
						<h4 class="offset-title mb-20">Contact Info</h4>
						<p>
							<i class="fal fa-address-book"></i>
							23/A, Miranda City Likaoli Prikano, Dope
						</p>
						<p>
							<i class="fal fa-phone"></i>
							+0989 7876 9865 9
						</p>
						<p>
							<i class="fal fa-envelope-open"></i>
							info@example.com
						</p>
					</div>
				</div>
				<div class="login-btn text-center">
					<a class="ht-btn w-100" href="login.html">Login</a>
				</div>

			</div>
		</div>
		<!-- side-bar end -->
