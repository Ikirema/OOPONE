<?php
require("connect.php");
session_start();

if ( !isset($_POST['email'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT `email`, `password`FROM `tbl_users` WHERE `email` = '$email' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];


        if ($row['password'] == 'password') {
            
            header('Location: index.php');
        }else{
            header('Location: index.php');
        }
    }
}else{
    echo "incorrect Credentials!";
}