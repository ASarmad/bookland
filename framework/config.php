<?php
    function db_connect()
    {
        $hostName = "localhost";
        $databaseUsername = "root";
        $databasePassword = NULL;
        $databaseName = "book_store";     
        $connection_link = @mysqli_connect($hostName,$databaseUsername,$databasePassword,$databaseName) or die("Database Connection Error!");
        return $connection_link;
    }    
    $con = db_connect();
?>