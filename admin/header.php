<!DOCTYPE html>
<html lang="en">
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
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="../icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>	
<body>

<div class="page-wraper">
	
	
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.html"><img src="../images/logo.png" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<!--profile-->
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<!--<img src="images/profile1.jpg" alt="/">-->
									<div class="profile-info">
										<h6 class="title"><?php echo $_SESSION['admin_username']; ?></h6>
										<span><?php echo $_SESSION['admin_mail']; ?></span>
									</div>
								</a>
								<div class="dropdown-menu py-0 dropdown-menu-end">
									<div class="dropdown-header">
										<h6 class="m-0"><?php echo $_SESSION['admin_username']; ?></h6>
										<span><?php echo $_SESSION['admin_mail']; ?></span>
									</div>
									<div class="dropdown-body">
										<<a href="#" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
												<span class="ms-2">Profile</span>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a class="btn btn-primary w-100 btnhover btn-sm" href="logout.php">Log Out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
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
						<a href="index.php"><img src="../images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.php"><img src="../images/logo.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span>Home</span></a></li>
							<li><a href="about-us.html"><span>About Us</span></a></li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Add</span></a>
								<ul class="sub-menu">
									<li><a href="add_category.php">New Category</a></li>
									<li><a href="add_book.php">New Book</a></li>
									<!--<li><a href="faq.html">FAQ's</a></li>
									<li><a href="help-desk.html">Help Desk</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
									<li><a href="under-construction.html">Under Construction</a></li>
									<li><a href="error-404.html">Error 404</a></li>-->
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>View</span></a>
								<ul class="sub-menu">
									<li><a href="view_category.php">Categorys</a></li>
									<li><a href="view_book.php">Books</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Blog</span></a>
								<ul class="sub-menu">
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-large-sidebar.html">Blog Large Sidebar</a></li>
									<li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>
									<li><a href="blog-detail.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact-us.html"><span>Contact Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->