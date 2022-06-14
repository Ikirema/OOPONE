<?php 
require("connect.php");

$user_id = $_POST['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$role = $_POST['role'];
$is_deleted = $_POST['is_deleted'];



$sql = "INSERT INTO tbl_users(user_id, firstname, lastname, phonenumber, dateofbirth, email, password, gender, role, is_deleted)  VALUES ('$user_id','$firstname','$lastname','$phonenumber','$dateofbirth','$email','$password','$gender','$role','$is_deleted')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>