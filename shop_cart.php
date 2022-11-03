<?php
include_once("header.php");
?>
		
<div class="page-content">
	<!-- inner page banner -->
	<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Cart</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
						<li class="breadcrumb-item">Cart</li>
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
			<div class="row mb-5">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table check-tbl">
							<thead>
								<tr>
									<th>Product</th>
									<th>Product name</th>
									<th>Unit Price</th>
									<th>Quantity</th>
									<th>Total</th>
									<th class="text-end">Close</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book3.jpg" alt=""></td>
									<td class="product-item-name">Battle Drive</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book2.jpg" alt=""></td>
									<td class="product-item-name">Home</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical3" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book4.jpg" alt=""></td>
									<td class="product-item-name">Such A Fun Age</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical4" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book1.jpg" alt=""></td>
									<td class="product-item-name">Real Life</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical5" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book6.jpg" alt=""></td>
									<td class="product-item-name">Cat Adventure</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical6" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
								<tr>
									<td class="product-item-img"><img src="images/books/grid/book5.jpg" alt=""></td>
									<td class="product-item-name">Take Out Tango</td>
									<td class="product-item-price">$28.00</td>
									<td class="product-item-quantity">
										<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical7" type="text" value="1" name="demo_vertical2"/>
										</div>
									</td>
									<td class="product-item-totle">$28.00</td>
									<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="shop_checkout.php" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
			</div>
		</div>
		<!-- Product END -->
	</section>
	<!-- contact area End--> 

</div>

<?php
include_once("footer.php");
?>