<?php 
require("connect.php");

$admin_id = $_POST['admin_id'];
$email = $_POST['email'];
$password = $_POST['password'];

$query="select * from admin_login where admin_id='$admin_id', email='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$conn=mysqli_num_rows($result);

if($count>0){
    echo "login Successful";
}
else{
    echo "login not Successful";
}
?>