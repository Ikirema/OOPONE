<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce_website";


    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connrction failed!".mysqli_connect_error());
    }
    
?>