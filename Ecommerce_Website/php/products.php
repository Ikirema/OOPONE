<!DOCTYPE html>
<Html>

<head>
    <title>
        Product
    </title>
    <link rel="stylesheet" href="../css/layout.css">
</head>
<Body class="product">
    <form method="post" action="process_products.php" enctype="multipart/form-data">
        <div style="position: absolute; left:450px; top: 10px;">
        <h1>PRODUCT <span>FORM</span></h1><br>
        <h1>AUTHORIZED <span>personel only</span></h1>
        <fieldset class="fieldset1">
                   
            <!-- product_id is an AUTO INCREMENT in the database. -->
               
                <p>insert product name:
                    <input type="text" name="product_name" placeholder="Product_name">
                </p>
        
                <p>Insert Unit Price:
                    <input type="text" name="unit_price" placeholder="unit_price">
                </p>

                <label for="category_id">Insert Category: </label>
                <select name="category_id" id="category_id">
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM tbl_categories";
                    $result = mysqli_query($conn, $sql); 

                    while ($category_id = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $category_id["category_id"];?>"><?php echo $category_id["category_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>

                <label for="subcategory_id">Insert Subcategory: </label>
                <select name="subcategory_id" id="subcategory_id">
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM tbl_subcategories";
                    $result = mysqli_query($conn, $sql); 

                    while ($subcategory_id = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $subcategory_id["subcategory_id"];?>"><?php echo $subcategory_id["subcategory_name"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>


                <!-- instead of using added_by we use role_id that being the ADMIN who added the product.  -->
                <label for="role_id">Insert Added BY  : </label>
                <select name="role_id" id="role_id">
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM tbl_roles";
                    $result = mysqli_query($conn, $sql); 

                    while ($role_id = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $role_id["role_id"];?>"><?php echo $role_id["rolename"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>
        
                <p>Insert product description:
                    <input type="text" name="product_description" placeholder="Product_description">
                </p>
                 
                <p>Insert Product Image:
                    <input type="file" name="product_image" placeholder="product_image">
                </p>

                <p>Insert Available Quantity:
                    <input type="text" name="available_quantity" placeholder="available_quantity">
                </p>

                <!-- is_deleted is a default ENUM in the database. -->
        
                <p>
                <input type="submit" name="upload" class="button" value="Submit">
                </p>

                <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>        

                <a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>
    
        </fieldset>
        </div>
            
</form>
</Body>
</Html>