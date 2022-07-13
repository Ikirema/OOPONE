<?php
    require('connect.php');
    
    if (isset($_POST['upload'])){

        $filename = $_FILES['product_image']['name'];
        $temp_name = $_FILES['product_image']['tmp_name'];
        $folder = "uploads/".$filename;


     
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $unit_price = $_POST['unit_price'];
		$available_quantity= $_POST['available_quantity'];
		$category_id = $_POST['category_id'];
        $subcategory_id = $_POST['subcategory_id'];
        $role_id = $_POST['role_id'];
        

        if(empty($product_name)||empty($product_description)||empty($unit_price)||empty($available_quantity)||empty($category_id)||empty($subcategory_id)||empty($role_id)||empty($role_id)){
            echo "Kindly input details!";
        }else{
            $sql = "INSERT INTO tbl_products(product_name, product_description, product_image, unit_price, available_quantity, category_id, subcategory_id, role_id) VALUES ('$product_name','$product_description','$folder','$unit_price','$available_quantity','$category_id','$subcategory_id','$role_id')";

        if(mysqli_query($conn, $sql)){
            if(move_uploaded_file($temp_name, $folder)){
                echo "<h3> Product added succesfully!</h3>";
            }else {
                echo "<h3>Failed to add product!</h3>";
            }
        }else{
            echo "Error: Product not added".mysqli_error($conn);
        }

        }


    }


?>