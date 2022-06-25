<!DOCTYPE html>
<html>
    <head>
        <title>View Products.</title>
        <link rel="stylesheet" type="text/css" href="../css/users.css">

    </head>
    <body>
        <table class="table">
            <thead>
                <th>product_id</th>
                <th>product_name</th>
                <th>product_description</th>
                <th>product_image</th>
                <th>unit_price</th>
                <th>available_quantity</th>
                <th>subcategory_id</th>
                <th>category_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>role_id</th>
                <th>is_deleted</th>
                <th>Action</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("products_db.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["product_id"] ?></td>
                    <td><?php echo $value["product_name"] ?></td>
                    <td><?php echo $value["product_description"] ?></td>
                    <td><?php echo $value["product_image"] ?></td>
                    <td><?php echo $value["unit_price"] ?></td>
                    <td><?php echo $value["available_quantity"] ?></td>
                    <td><?php echo $value["subcategory_id"] ?></td>
                    <td><?php echo $value["category_id"] ?></td>
                    <td><?php echo $value["created_at"] ?></td>
                    <td><?php echo $value["updated_at"] ?></td>
                    <td><?php echo $value["role_id"] ?></td>
                    <td><?php echo $value["is_deleted"] ?></td>
                    <td><a href="productsdb.php"?edit="<?php $value["product_id"] ?>">Edit</a></td>
                </tr>
                <?php }
                ?>
            </tbody>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>

        </table>

    </body>
</html>