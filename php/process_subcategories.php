<?php 
require("connect.php");

$subcategory_id = $_POST['subcategory_id'];
$subcategory_name = $_POST['subcategory_name'];
$category_id = $_POST['category_id'];
$price = $_POST['price'];
$is_deleted = $_POST['is_deleted'];




$sql = "INSERT INTO tbl_subcategories(subcategory_id, subcategory_name, category_id, price, is_deleted)  VALUES ('$subcategory_id, $subcategory_name, $category, $price, $is_deleted')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>