<?php
session_start();
include_once("framework/config.php");
include_once("framework/site_func.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 19:12:16 GMT -->
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png"/>
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland Store</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>	
<body>

<div class="page-wraper">
	<!--<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div> 
	</div>
	<div id="loading-area" class="preloader-wrapper-2">
		<div class="preloader-inner">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div> 
	</div>-->
	
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.php"><img src="images/logo.png" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<?php
							if(isset($_SESSION['user_login'])){
								?>
								<li class="nav-item">
									<button type="button" class="nav-link box cart-btn">
										<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
										<span class="badge">5</span>
									</button>
									<ul class="dropdown-menu cart-list">
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.html"> 
														<img alt="" class="media-object" src="images/books/small/pic1.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Real Life</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.html"> 
														<img alt="" class="media-object" src="images/books/small/pic2.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Home</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="books-detail.html"> 
														<img alt="" class="media-object" src="images/books/small/pic3.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Such a fun age</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item text-center">
											<h6 class="text-secondary">Totle = $500</h6>
										</li>
										<li class="text-center d-flex">
											<a href="shop_cart.php" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
											<a href="shop_checkout.php" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown profile-dropdown  ms-4">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="profile-info">
											<h6 class="title">Brian</h6>
											<span>info@gmail.com</span>
										</div>
									</a>
									<div class="dropdown-menu py-0 dropdown-menu-end">
										<div class="dropdown-header">
											<h6 class="m-0">Brian</h6>
											<span>info@gmail.com</span>
										</div>
										<div class="dropdown-body">
											<a href="my_profile.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
													<span class="ms-2">Profile</span>
												</div>
											</a>
											<a href="shop_cart.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
												<div>
													<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
													<span class="ms-2">My Order</span>
												</div>
											</a>
										</div>
										<div class="dropdown-footer">
											<a class="btn btn-primary w-100 btnhover btn-sm" href="shop_logout.php">Log Out</a>
										</div>
									</div>
								</li>
								<?php
							}else{
								?>
								<li><a class="btn btn-primary btnhover" href="shop_login.php">Log In</a></li>
								<?php
							}
							?>
						</ul>
					</div>
				</div>
				
				<!-- header search nav -->
				<div class="header-search-nav">
					<form class="header-item-search">
						<div class="input-group search-input">
							<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<!--<div class="extra-nav">
						<div class="extra-cell">
							<a href="contact-us.html" class="btn btn-primary btnhover">Get In Touch</a>	
						</div>
					</div>-->
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.html"><img src="images/logo.png" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about_us.php"><span>About Us</span></a></li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>
								<ul class="sub-menu">
									<li><a href="faq.php">FAQ's</a></li>
									<li><a href="help_desk.php">Help Desk</a></li>
									<li><a href="privacy_policy.php">Privacy Policy</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>
								<ul class="sub-menu">
									<li><a href="books_gridview_sidebar.php">Shop Grid Sidebar</a></li>
									<li><a href="books_listview_sidebar.php">Shop List Sidebar</a></li>
									<li><a href="books_detail.php">Shop Detail</a></li>
								</ul>
							</li>
							<li><a href="contact_us.php"><span>Contact Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="#"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="#"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->