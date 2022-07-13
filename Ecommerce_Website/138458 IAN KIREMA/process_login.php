<?php 

require("connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql  = "SELECT * FROM tbl_users where email = '$_POST[email]' AND password = '$_POST[password]'";


if (mysqli_query($conn,$sql)) {
	echo "LOGIN successfully";
}else{echo "Error: WRONG CREDENTIALS".mysqli_error($conn);}
?>