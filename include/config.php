<?php
    ob_start();
    $timezone = date_default_timezone_set("Asis/Kolkata");
    
    $con = mysqli_connect("localhost", "root", "", "symphony");

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }



?>