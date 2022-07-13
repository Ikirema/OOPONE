<?php
$hiddenproduct_id = $_POST['hiddenproduct_id'];
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_image = $_POST['product_image'];
$unit_price = $_POST['unit_price'];
$available_quantity = $_POST['available_quantity'];
$subcategory_id = $_POST['subcategory_id'];
$category_id = $_POST['category_id'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$role_id = $_POST['role_id'];
$is_deleted = $_POST['is_deleted'];


require("connect.php");
$sql = "UPDATE tbl_products SET `product_id`='$product_id',`Product_name`='$product_name',`product_description`='$product_description', `product_image` = '$product_image',`unit_price`='$unit_price',`available_quantity`='$available_quantity',`subcategory_id`='$subcategory_id',`category_id`='$category_id',`created_at`='$created_at',`updated_at`='$updated_at',`role_id`='$role_id',`is_deleted`='$is_deleted' WHERE product_id = '$hiddenproduct_id'";
$result = mysqli_query($conn, $sql);

if($result = mysqli_query($conn, $sql)){
    echo "<p> Product info updated.</p>";
            
                }

?>
