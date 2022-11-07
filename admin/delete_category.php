<?php
session_start();
include_once("../framework/site_func.php");
include_once("../framework/config.php");


if(isset($_SESSION['admin_login']))
{
    //logged in
    include_once("header.php");
    
    if(isset($_GET['category_id']))
    {
        $category_id = intval($_GET['category_id']);
        $sql = "DELETE FROM category WHERE category_id=$category_id";
        $result = mysqli_query($con,$sql);
        
        $sql_book = "DELETE FROM book WHERE book_category_id=$category_id";
        $result_book = mysqli_query($con,$sql_book);
        
        if($result and $result_book)
        {
            output_msg("s","Category Deleted");
            redirect(2,"view_category.php");
        }
        else
        {
            output_msg();
        }
    }
    else
    {
        output_msg("f","Error! Unepxected Error!");
    }
    
    include_once("footer.php");
}
else
{
    include_once("login.php");
}



?>