<?php
include_once("header.php");
?>

<?php
if(isset($_GET['bid']))
{
	$book_id = intval($_GET['bid']);
	$sql = "SELECT * FROM book WHERE book_id = $book_id";
}
else
{
	$sql = "SELECT * FROM book";
}
$result = mysqli_query($con,$sql);
if($result)
{
	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result)
		?>
		<div class="page-content bg-grey">
			<section class="content-inner-1">
				<div class="container">
					<div class="row book-grid-row style-4 m-b60">
						<div class="col">
							<div class="dz-box">
								<div class="dz-media">
									<img src="images/books/<?php echo $row['book_photo']; ?>" alt="book">
								</div>
								<div class="dz-content">
									<div class="dz-header">
										<h3 class="title"><?php echo $row['book_name'];?></h3>
									</div>
									<div class="dz-body">
										<div class="book-detail">
											<ul class="book-info">
												<li>
													<div class="writer-info">
														<div>
															<span>Writen by</span><?php echo $row['book_author'];?>
														</div>
													</div>
												</li>
												<li><span>Publisher</span><?php echo $row['book_publisher'];?></li>
												<li><span>Year</span><?php echo $row['book_date_publication'];?></li>
											</ul>
										</div>
										<p class="text-1"><?php echo $row['book_desc'];?></p>
										<div class="book-footer">
											<div class="price">
												<h5><?php echo $row['book_price'];?>$</h5>
											</div>
											<div class="product-num">
												<div class="quantity btn-quantity style-1 me-3">
													<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
												</div>
												<a href="#" class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Add to cart</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-8">
							<div class="product-description tabs-site-button">
								<ul class="nav nav-tabs">
									<li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a></li>
								</ul>
								<div class="tab-content">
									<div id="graphic-design-1" class="tab-pane show active">
										<table class="table border book-overview">
											<tr>
												<th>Book Title</th>
												<td><?php echo $row['book_name'];?></td>
											</tr>
											<tr>
												<th>Author</th>
												<td><?php echo $row['book_author'];?></td>
											</tr>
											<tr>
												<th>ISBN</th>
												<td><?php echo $row['book_id'];?></td>
											</tr>
											<tr>
												<th>Date Published</th>
												<td><?php echo $row['book_date_publication'];?></td>
											</tr>
											<tr>
												<th>Publisher</th>
												<td><?php echo $row['book_publisher'];?></td>
											</tr>
											<tr>
												<th>Pages</th>
												<td>520</td>
											</tr>
											<tr class="tags">
												<th>Tags</th>
												<td>
													<a href="javascript:void(0);" class="badge">Drama</a>
													<a href="javascript:void(0);" class="badge">Advanture</a>
													<a href="javascript:void(0);" class="badge">Survival</a>
													<a href="javascript:void(0);" class="badge">Biography</a>
													<a href="javascript:void(0);" class="badge">Trending2022</a>
													<a href="javascript:void(0);" class="badge">Bestseller</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 mt-5 mt-xl-0">
							<div class="widget">
								<h4 class="widget-title">Related Books</h4>
								<div class="row">
									<?php
									$sql_related = "SELECT * FROM book WHERE book_category_id=$row[book_category_id] AND book_id!=$row[book_id] ORDER BY RAND() LIMIT 2";
									$result_related = mysqli_query($con,$sql_related);
									if($result_related)
									{
										if(mysqli_num_rows($result_related)>0)
										{
											while($row_related=mysqli_fetch_array($result_related))
											{
											?>
											<div class="col-xl-12 col-lg-6">
												<div class="dz-shop-card style-5">
													<div class="dz-media">
														<img src="images/books/<?php echo $row_related['book_photo'];?>" alt="">
													</div>
													<div class="dz-content">
														<h5 class="subtitle"><?php echo $row_related['book_name'];?></h5>
														
														<div class="price">
															<span class="price-num"><?php echo $row_related['book_price'];?>$</span>
														</div>
														<a href="books_detail.php?bid=<?php echo $row_related['book_id']; ?>" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
													</div>
												</div>
											</div>
											<?php
											}
										}
										else
										{
											output_msg("f","Error! pls fill data.");
										}
									}
									else
									{
										output_msg();
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php
	}
}
?>	

	<!-- Newsletter -->
	<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
		<div class="container">
			<div class="subscride-inner">
				<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
					<div class="col-xl-7 col-lg-12">
						<div class="section-head mb-0">
							<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6">
						<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
							<div class="dzSubscribeMsg"></div>
							<div class="form-group">
								<div class="input-group mb-0">
									<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
											<span>SUBSCRIBE</span>
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter End -->
</div>

<?php
include_once("footer.php");
?>