<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 19:12:45 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

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
						<a href="index.php"><img src="../images/logo.png" alt="logo"></a>
					</div>
				</div>
			</div>
			<!-- Main Header End -->
		</header>
		<!-- Header End -->
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(../images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>administration</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Login</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- login area -->
			<section class="content-inner shop-account">
				<!-- form -->
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 mb-2"></div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
                                    <?php
									if(isset($_POST['submit']))
									{
										$admin_username = validate($_POST['admin_username']);
										$admin_password = validate($_POST['admin_password']);

										if($admin_username!=NULL && $admin_password!=NULL)
										{
											$admin_password = enc_pass($admin_password);

											$sql = "SELECT * FROM admin WHERE
														admin_username='$admin_username'
														and
														admin_password='$admin_password'";
											$result = mysqli_query($con,$sql);

											if($result)
											{
												if(mysqli_num_rows($result)>0)
												{
													$row_admin = mysqli_fetch_array($result);
													$_SESSION['admin_login']="yes";
													$_SESSION['admin_id']= $row_admin['admin_id'];
													$_SESSION['admin_username']= $row_admin['admin_username'];
													$_SESSION['admin_mail']= $row_admin['admin_mail'];
													$_SESSION['admin_phone']= $row_admin['admin_phone'];
													redirect(0,"index.php");
												}
												else
												{
													output_msg("f","Wrong username or password");
													redirect(0,"index.php");
												}
											}
											else
											{
												output_msg();
											}


										}
										else
										{
											output_msg("f","Please fill Required Fields");
											redirect(2,"index.php");
										}

									}
									else
									{
                                    ?>
                                    <form id="login" class="tab-pane active col-12" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                        <h4 class="text-secondary">LOGIN</h4>
                                        <p class="font-weight-600">If you have an account with us, please log in.</p>
                                        <div class="mb-4">
                                            <label class="label-title">USERNAME *</label>
                                            <input name="admin_username" required="" class="form-control" placeholder="Your Username" type="text" />
                                        </div>
                                        <div class="mb-4">
                                            <label class="label-title">PASSWORD *</label>
                                            <input name="admin_password" required="" class="form-control " placeholder="Type Password" type="password" />
                                        </div>
                                        <div class="text-left">
                                            <button name="submit" class="btn btn-primary btnhover me-2" type="submit">login</button>
                                        </div>
                                    </form>
                                    <?php
									}
                                    ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- form END -->
			</section>
			<!-- login area End--> 
		</div>
		




		<!-- Footer -->
	<footer class="site-footer footer-dark">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="index.php"><img src="../images/logo-white.png" alt=""></a> 
							</div>
							<p class="text">Bookland administration</p>
							<div class="dz-social-icon style-1">
								<ul>
									<li><a href="https://www.facebook.com/ahmed.aiad.798/" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCPP_fFVD_jNWu9nMKvcZdEw" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
									<li><a href="https://www.linkedin.com/in/ahmed-mohamed-tarek-41a74a176/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s"></div>
					<div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s"></div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s"></div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Get in Touch With Us</h5>
							<ul>
								<li>
									<i class="flaticon-placeholder"></i>
									<span>Google The 47th Building, The 47 Office Building, N 90th Street - Service Ln, New Cairo 1, Cairo Governorate 11835</span>
								</li>
								<li>
									<i class="flaticon-phone"></i>
									<span>+201142645585<br>
									+201114049646</span>
								</li>
								<li>
									<i class="flaticon-email"></i> 
									<span>ahmedtarek@gmail.com<br>
									info@bookland.id</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top End -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row fb-inner">
					<div class="col-lg-6 col-md-12 text-start"> 
						<p class="copyright-text">Bookland Administration Website -  � 2022 All Rights Reserved</p>
					</div>
					<div class="col-lg-6 col-md-12 text-end"> 
						<p>Made with Ahmed Sarmad & Ahmed Tarek by <a href="https://dexignzone.com/">7mboola Team<span class="heart"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
		
	</footer>
	<!-- Footer End -->
		
		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="../js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="../js/custom.js"></script><!-- CUSTOM JS -->


</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 19:12:45 GMT -->
</html>