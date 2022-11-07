<?php
session_start();
include_once("../framework/site_func.php");
include_once("../framework/config.php");


if(isset($_SESSION['admin_login']))
{
    //logged in
    include_once("header.php");
?><div class="page-wraper">
<div class="page-content">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(../images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Edit Category Name</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php"> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="view_category.php">View</a></li>
                        <li class="breadcrumb-item">Categorys</li>
                        <li class="breadcrumb-item">Edit</li>
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
    if(isset($_GET['category_id']))
    {
        $category_id = intval($_GET['category_id']);

        $sql =  "SELECT * FROM category WHERE category_id=$category_id";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                $row_old_category = mysqli_fetch_array($result);

                if(isset($_POST['submit']))
                {
                    $category_name = validate($_POST['category_name']);
                    if($category_name!=NULL)
                    {
                        $sql = "UPDATE category SET category_name='$category_name',category_admin_id=$_SESSION[admin_id] WHERE category_id=$category_id";
                        $result = mysqli_query($con,$sql);
                        if($result)
                        {
                            output_msg("s","Category Updated");
                            redirect(2,"view_category.php");
                        }
                        else
                        {
                            output_msg();
                        }
                    }
                    else
                    {
                        output_msg("f","Error! Please fill all data");
                        redirect(2,"edit_category.php?category_id=$category_id");
                    }
                }
                else
                {
                            ?>
                            <form id="login" class="tab-pane active col-12" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?category_id=$category_id"; ?>">
                                <h4 class="text-secondary">Change Category Name</h4>
                                <p class="font-weight-600">Category name must not already exist.</p>
                                <div class="mb-4">
                                    <label class="label-title">NEW CATEGORY NAME *</label>
                                    <input name="category_name" required="" class="form-control" placeholder="Category Name (<?php echo $row_old_category['category_name']; ?>) Enter New Name " type="text" />
                                </div>
                                <div class="text-left">
                                    <button name="submit" class="btn btn-primary btnhover me-2" type="submit">Change</button>
                                </div>
                            </form>
                            <?php
                }
            }
            else
            {
                output_msg("f","Error! Unexpected Error");
            }
        }
        else
        {
            output_msg();
        }
    }
    else
    {
        output_msg("f","Error! Unexpected error");
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
<?php

    include_once("footer.php");
}
else
{
    include_once("login.php");
}



?>