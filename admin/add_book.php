<?php
session_start();
include_once("../framework/site_func.php");
include_once("../framework/config.php");


if(isset($_SESSION['admin_login']))
{
    //logged in
   
    include_once("header.php");
?>
        <div class="page-wraper">		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(../images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Book</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"> Home</a></li>
								<li class="breadcrumb-item">Add</li>
                                <li class="breadcrumb-item">New Book</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<div class="container">
    <?php
    if(isset($_POST['submit']))
    {
        $book_name = validate($_POST['book_name']);
        $book_publisher = validate($_POST['book_publisher']);
        $book_author = validate($_POST['book_author']);
        $book_date_publication = validate($_POST['book_date_publication']);
        $book_category_id = intval($_POST['book_category_id']);
        $book_price = intval($_POST['book_price']);
        $book_desc = validate($_POST['book_desc']);
        
        $book_image_name = time().$_FILES['book_image_name']['name'];
        $book_image_path = $_FILES['book_image_name']['tmp_name'];
        
        
        if($book_name!=NULL and $book_publisher!=NULL and $book_author!=NULL and $book_date_publication!=NULL and $book_category_id!=NULL and $book_price!=NULL and $book_desc!=NULL and $book_image_path!=NULL)
        {
            $sql = "INSERT INTO book VALUES (NULL,'$book_name','$book_publisher','$book_author','$book_date_publication','$book_price','$book_desc','$book_image_name','$book_category_id','$_SESSION[admin_id]')";
            $result = mysqli_query($con,$sql);
            if($result)
            {
                if(move_uploaded_file($book_image_path,"../images/books/$book_image_name"))
                {
                    output_msg("s","Product Added");
                    redirect(2,"index.php");
                }
                else
                {
                    output_msg("f","Error! upload file failed");
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
            redirect(2,"add_book.php");
        }
    }
    else
    {
    ?>
            <form class="shop-form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Add New Book</h4>
									<div class="form-group">
										<input type="file" class="form-control" required="" placeholder="Image Of Book" name="book_image_name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" required="" placeholder="Book Name" name="book_name">
									</div>
									<div class="row">
										<div class="form-group col-md-4">
											<input type="text" class="form-control" required="" placeholder="Book Publisher" name="book_publisher">
										</div>
										<div class="form-group col-md-4">
											<input type="text" class="form-control" required="" placeholder="Book Author" name="book_author">
										</div>
										<div class="form-group col-md-4">
										<input type="date" class="form-control" required="" placeholder="Book Date Publication" name="book_date_publication">
										</div>
									</div>
									<div class="form-group">
										 <?php
        $sql = "SELECT * FROM category";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                                         ?>
												<select class="default-select" name="book_category_id">
													<?php
                while($row=mysqli_fetch_array($result))
                {
                                                    ?>
														<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
														<?php
                }
                                                        ?>
												</select>
												<?php
            }
            else
            {
                output_msg("f","Error! There is no category to select");
                redirect(2,"add_category.php");
            }
        }
        else
        {
            output_msg();
        }
        
                                                ?>	
									</div>
									<div class="form-group">
									<textarea name="book_desc" required="" class="form-control" placeholder="Book Description"></textarea>
									</div>
									<div class="form-group">
										<input type="number" required="" class="form-control" placeholder="Book Price" name="book_price">
									</div>

									<div class="text-left">
                                        <button name="submit" class="btn btn-primary btnhover me-2" type="submit">Add Book</button>
                                    </div>
								</div>
							</div>
						</div>
					</form>
        <?php
    }
        ?>
					</div>
			</section>
		</div>

					<?php
    
    include_once("footer.php");
}
else
{
    include_once("login.php");
}



        ?>


