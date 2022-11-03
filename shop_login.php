<?php
include_once("header.php");
?>
<div class="page-content">
	<!-- inner page banner -->
	<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Login</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Login</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- inner page banner End-->
	
	<!-- contact area -->
	<section class="content-inner shop-account">
		<!-- Product -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 mb-4">
					<div class="login-area">
						<div class="tab-content">
							<h4>NEW CUSTOMER</h4>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="shop_registration.php">CREATE AN ACCOUNT</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-4">
					<div class="login-area">
						<div class="tab-content nav">
						<?php
							if(isset($_POST['submit']))
							{
								$user_username = validate($_POST['user_username']);
								$user_password = validate($_POST['user_password']);
								
								if($user_username!=NULL and $user_password!=NULL)
								{
									//$user_password = enc_pass($user_password);
									
									$sql = "SELECT * FROM user WHERE user_username='$user_username' and user_password='$user_password'";
									$result = mysqli_query($con,$sql);
									if($result)
									{
										if(mysqli_num_rows($result)>0)
										{
											$row = mysqli_fetch_array($result);
											$_SESSION['user_login']="yes";
											$_SESSION['user_id']= $row['user_id'];
											$_SESSION['user_username']= $row['user_username'];
											$_SESSION['user_mail']= $row['user_mail'];
											
											output_msg("s","Logged in successfuly.Welcome, $row[user_username]");
											redirect(2,"index.php");
										}
										else
										{
											output_msg("f","Error! Wrong username/password");
											redirect(2,"index.php");
										}
									}
									else
									{
										output_msg();
									}
									
									
								}
								else
								{
									output_msg("f","Error! Please fill all data");
									redirect(2,"index.php");
								}
								
							}
							else
							{
								?>
									<form id="login" class="tab-pane active col-12" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
										<h4 class="text-secondary">LOGIN</h4>
										<p class="font-weight-600">If you have an account with us, please log in.</p>
										<div class="mb-4">
											<label class="label-title">Username *</label>
											<input name="user_username" required="" class="form-control" placeholder="Username" type="text">
										</div>
										<div class="mb-4">
											<label class="label-title">Password *</label>
											<input name="user_password" required="" class="form-control " placeholder="Password" type="password">
										</div>
										<div class="text-left">
											<button class="btn btn-primary btnhover me-2" type="submit" name="submit">login</button>
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
		<!-- Product END -->
	</section>
	<!-- contact area End--> 
</div>

<?php
include_once("footer.php");
?>
