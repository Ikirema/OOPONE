<?php 
require("connect.php");


$subcategory_name = $_POST['subcategory_name'];
$category_id = $_POST['category_id'];
$price =$_POST['price'];


$sql = "INSERT INTO tbl_subcategories( subcategory_name, category_id, price )  VALUES ('$subcategory_name', '$category_id', '$price')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);

}

?>