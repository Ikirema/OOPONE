<?php 
require("connect.php");


$rolename = $_POST['rolename'];


$sql = "INSERT INTO tbl_roles( rolename )  VALUES ('$rolename')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);

}

?>