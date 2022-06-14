<!DOCTYPE html>
<Html>

<head>
    <title>
        Product
    </title>
    <link rel="stylesheet" href="../css/layout.css">
</head>
<Body class="product">
    <form method="post" action="process_product.php" enctype="multipart/form-data">
        <div style="position: absolute; left:450px; top: 20px;">
        <h1>PRODUCT <span>FORM</span></h1><br>
        <h1>AUTHORIZED <span>personel only</span></h1>
        <fieldset class="fieldset1">
               
                <p>insert product name:
                    <input type="text" name="product_name" placeholder="Product_name">
                </p>
                <p>insert product id:
                    <input type="text" name="product_id" placeholder="Product_id">
                </p>
        
                <p>Insert Unit Price:
                    <input type="text" name="unit_price" placeholder="unit_price">
                </p>

                <p>Insert subcategory ID:
                    <input type="text" name="subcategory_id" placeholder="subcategory_id">
                </p>

                <p>Insert Created At:
                    <input type="text" name="created_at" placeholder="created_at">
                </p>

                <p>Insert Updated At:
                    <input type="text" name="updated_at" placeholder="updated_at">
                </p>

                <p>Insert Added By:
                    <input type="text" name="added_by" placeholder="added_by">
                </p>
        
                <p>Insert product description:
                    <input type="text" name="product_description" placeholder="Product_description">
                </p>
                 
                <p>Insert Product Image:
                    <input type="file" name="product_image" placeholder="product_image">
                </p>

                <p>Insert Available Quantity:
                    <input type="text" name="available_quantity" placeholder="available_quantity">
                </p>

                <p>Insert Is deleted:
                    <input type="text" name="is_deleted" placeholder="is_deleted">
                </p>
        
                <p>
                <input type="submit" class="button" value="Submit">
                </p>

                <p>ADD A SUBCATEGORY : <a href="http://localhost/Ecommerce_Website/php/subcategories.php">subcategory</a></p>
                <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
    
        </fieldset>
        </div>
            
</form>
</Body>
</Html>