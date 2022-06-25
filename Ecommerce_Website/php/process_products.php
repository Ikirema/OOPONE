<?php 
require("connect.php");

$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$folder = "uploads/";
//$product_image = $folder.basename($_FILES['product_image']['name']);

if(isset($_FILES)){

	$product_image='C:\xampp2\htdocs\Ecommerce_Website\images';
	$uploaded_name=$_FILES['product_image']['name'];
    
	$to_upload = $folder.$uploaded_name;
	move_uploaded_file($folder, $to_upload);

	//echo $to_upload;
}

$unit_price = $_POST['unit_price'];
$available_quantity = $_POST['available_quantity'];
$category_id = $_POST['category_id'];
$subcategory_id = $_POST['subcategory_id'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];

// instead of using added_by we use role_id that being the ADMIN who added the product.
$role_id = $_POST['role_id'];


$sql = "INSERT INTO tbl_products(product_name, product_description, product_image, unit_price, available_quantity, category_id, subcategory_id, created_at, updated_at, role_id)  VALUES ('$product_name', '$product_description', '$to_upload', '$unit_price', '$available_quantity', '$category_id', '$subcategory_id', '$created_at', '$updated_at', '$role_id')";

if (mysqli_query($conn,$sql)) {
	echo "New Record inserted successfully";
}else{echo "Error: Record not added".mysqli_error($conn);}

?>