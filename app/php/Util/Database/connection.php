<?php

    //error_reporting(0);
    
    //Database parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name="realsports";
    // Create connection
    $con = new mysqli($servername, $username, $password,$db_name);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>