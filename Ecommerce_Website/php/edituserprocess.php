<?php
$hiddenuser_id = $_POST['hiddenuser_id'];
$user_id = $_POST['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$role_id = $_POST['role_id'];
$is_deleted = $_POST['is_deleted'];


require("connect.php");
$sql = "UPDATE tbl_users SET `user_id`='$user_id',`firstname`='$firstname',`lastname`='$lastname', `email` = '$email', `password` = '$password',`phonenumber`='$phonenumber',`dateofbirth`='$dateofbirth',`gender`='$gender',`role_id`='$role_id',`is_deleted`='$is_deleted' WHERE user_id = '$hiddenuser_id'";
$result = mysqli_query($conn, $sql);

if($result = mysqli_query($conn, $sql)){
    echo "<p> User info updated.</p>";
            
                }

?>
