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
                <h1>All Books</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php"> Home</a>
                        </li>
                        <li class="breadcrumb-item">View</li>
                        <li class="breadcrumb-item">Books</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->
    <!-- login area -->
    <section class="content-inner shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <?php
    $sql = "SELECT * FROM book";
    $result = mysqli_query($con,$sql);

    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
                        ?>
<table class="table check-tbl">
    <thead>
        <tr>
            <th>Book ID</th>
            <th>Book Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Added By</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
                        
                        while($row_book = mysqli_fetch_array($result))
                        {
                            ########################################################
                            $sql_category = "SELECT * FROM category WHERE category_id=$row_book[book_category_id]";
                            $result_category = mysqli_query($con,$sql_category);
                            if($result_category)
                            {
                                if(mysqli_num_rows($result_category)>0)
                                {
                                    $row_category = mysqli_fetch_array($result_category);
                                    $category_name = $row_category['category_name'];
                                }
                                else
                                {
                                    $category_name = "N/A";
                                }
                            }
                            else
                            {
                                output_msg();
                            }
                            ###############################################

                            $sql_admin = "SELECT * FROM admin WHERE admin_id=$row_book[book_admin_id]";
                            $result_admin = mysqli_query($con,$sql_admin);

                            if($result_admin)
                            {
                                if(mysqli_num_rows($result_admin)>0)
                                {
                                    $row_admin = mysqli_fetch_array($result_admin);
                                    $admin_username = $row_admin['admin_username'];
                                }
                                else
                                {
                                    $admin_username = "N/A";
                                }
                            }
                            else
                            {
                                output_msg();
                            }


                            ################################################
        ?>
        <tr>
            <td class="product-item-price">
                <?php echo $row_book['book_id']; ?>
            </td>
            <td class="product-item-img">
                <img src="../images/books/<?php echo $row_book['book_photo'];?>" />
            </td>
            <td class="product-item-name">
                <?php echo $row_book['book_name']; ?>
            </td>
            
            <td class="product-item-price">
                <?php echo $row_book['book_price']; ?>
            </td>
            <td class="product-item-name">
                <?php echo $category_name; ?>
            </td>

            <td class="product-item-name">
                <?php echo $admin_username; ?>
            </td>
            <td class="product-item-name">
                <?php echo $row_book['book_desc']; ?>
            </td>
            <td class="product-item-close">
                                        <a href="#" class="ti-close"></a>
                                    </td>
            <td class="product-item-close">
                                        <a href="#" class="ti-close"></a>
                                    </td>
        </tr>
        <?php

                        }
                                      }
                                      else
                                      {
                                          output_msg("f","There Is No Data");
                                      }
                        }
                            else
                            {
                            output_msg();
                        }
        ?>
    </tbody>
                        </table>
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