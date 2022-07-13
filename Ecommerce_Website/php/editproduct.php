<?php
$product_id = $_POST['product_id'];

require("connect.php");
$sql = "SELECT * FROM tbl_products where product_id='$product_id'";
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $data = mysqli_fetch_assoc($result);
            echo "<div class='product_wrapper'>
        <form action='editproductprocess.php' method='POST'>
        <input type='hidden' name='hiddenproduct_id' value=".$product_id." />
        <p>Product_id:</p>
        <input type='text' name='product_id' value=".$data['product_id']." />
        <p>Product Name:</p>
        <input type='text' name='product_name' value=".$data['product_name']." />
        <p>Product Description:</p>
        <input type='text' name='product_description' value=".$data['product_description']." />
        <p>Product Image:</p>
        <input type='text' name='product_image' value=".$data['product_image']." />
        <p>Unit Price:</p>
        <input type='text' name='unit_price' value=".$data['unit_price']." />
        <p>Available Quantity:</p>
        <input type='text' name='available_quantity' value=".$data['available_quantity']." />
        <p>Subcategory:</p>
        <input type='text' name='subcategory_id' value=".$data['subcategory_id']." />
        <p>Category:</p>
        <input type='text' name='category_id' value=".$data['category_id']." />
        <p>Created At:</p>
        <input type='text' name='created_at' value=".$data['created_at']." />
        <p>Updated At:</p>
        <input type='text' name='updated_at' value=".$data['updated_at']." />
        <p>Role_id:</p>
        <input type='text' name='role_id' value=".$data['role_id']." />
        <p>Is Deleted:</p>
        <input type='text' name='is_deleted' value=".$data['is_deleted']." />


        <button type='submit' class='btn2'>Save</button>
        
        </form>
        </div>";

}

?>
