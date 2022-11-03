<?php
include_once("header.php");
?>
	
<div class="page-content">
	<!-- inner page banner -->
	<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Registration</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
						<li class="breadcrumb-item">Registration</li>
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
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 mb-4">
					<div class="login-area">
						<form>
							<h4 class="text-secondary">Registration</h4>
							<p class="font-weight-600">If you don't have an account with us, please Registration.</p>
							<div class="mb-4">
								<label class="label-title">Username *</label>
								<input name="dzName" required="" class="form-control" placeholder="Username" type="text">
							</div>
							<div class="mb-4">
								<label class="label-title">Email address *</label>
								<input name="dzName" required="" class="form-control" placeholder="Email Address" type="email">
							</div>
							<div class="mb-4">
								<label class="label-title">Password *</label>
								<input name="dzName" required="" class="form-control " placeholder="Password" type="password">
							</div>
							<div class="mb-4">
								<label class="label-title">Age *</label>
								<input name="dzName" required="" class="form-control " placeholder="Age" type="number">
							</div>
							<div class="mb-4">
								<label class="label-title">Gender *</label><br>
								<input type="radio" name="gender" />Male 
								<input type="radio" name="gender" checked />Female<br />
							</div>
							<div class="mb-4">
								<label class="label-title">Mobile Phone *</label>
								<input name="dzName" required="" class="form-control " placeholder="Phone" type="number">
							</div>
							<div class="mb-4">
								<label class="label-title">Address *</label>
								<input name="dzName" required="" class="form-control " placeholder="Address" type="text">
							</div>
							<div class="mb-4">
								<label class="label-title">Country *</label>
								<input name="dzName" required="" class="form-control " placeholder="Country" type="text">
							</div>
							<div class="mb-4">
								<label class="label-title">City *</label>
								<input name="dzName" required="" class="form-control " placeholder="City" type="text">
							</div>
							<div class="mb-5">
								<small>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.html">privacy policy</a>.</small>
							</div>
							<div class="text-left">
								<button class="btn btn-primary btnhover w-100 me-2">Register</button>
							</div>
						</form>
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
