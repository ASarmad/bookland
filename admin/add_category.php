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
                    <h1>Category</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php"> Home</a>
                            </li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item">new Category</li>
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
                                    $category_name = validate($_POST['category_name']);

                                    $sql  = "INSERT INTO category VALUES (NULL,'$category_name',$_SESSION[admin_id])";
                                    $result = mysqli_query($con,$sql);
                                    if($result)
                                    {
                                        output_msg("s","Category Added");
                                        redirect(2,"view_category.php");
                                    }
                                    else
                                    {
                                        output_msg();
                                    }
                                }
                                else
                                {
                                ?>
                                <form id="login" class="tab-pane active col-12" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                    <h4 class="text-secondary">Add New Category</h4>
                                    <p class="font-weight-600">Category name must not already exist.</p>
                                    <div class="mb-4">
                                        <label class="label-title">CATEGORY NAME *</label>
                                        <input name="category_name" required="" class="form-control" placeholder="Category Name Want To Add" type="text" />
                                    </div>
                                    <div class="text-left">
                                        <button name="submit" class="btn btn-primary btnhover me-2" type="submit">Add</button>
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