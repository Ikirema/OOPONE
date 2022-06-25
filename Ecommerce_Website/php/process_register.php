<?php 
require("connect.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$role_id = $_POST['role_id'];

$sql = "INSERT INTO tbl_users(firstname, lastname, phonenumber, dateofbirth, email, password, gender, role_id)  VALUES ('$firstname','$lastname','$phonenumber','$dateofbirth','$email','$password','$gender','$role_id')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>