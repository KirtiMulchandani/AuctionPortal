<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="auctionportal";

    $conn=mysqli_connect($server,$username,$password);

    if(!$conn)
        die("Failed to connect ".mysqli_connect_error());
    
    // else
    //     echo "Connection is created ";
    
?>