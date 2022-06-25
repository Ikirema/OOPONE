<?php 
require("connect.php");


$category_name = $_POST['category_name'];


$sql = "INSERT INTO tbl_categories( category_name )  VALUES ('$category_name')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);

}

?>