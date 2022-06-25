<!DOCTYPE html>
<html>
    <head>
        <title>View Subcategories.</title>
        <link rel="stylesheet" type="text/css" href="../css/users.css">

    </head>
    <body>
        <table class="table">
            <thead>
                <th>subcategory_id</th>
                <th>subcategory_name</th>
                <th>category_id</th>
                <th>price</th>
                <th>is_deleted</th>
                <th>Action</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("subcategories_db.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["subcategory_id"] ?></td>
                    <td><?php echo $value["subcategory_name"] ?></td>
                    <td><?php echo $value["category_id"] ?></td>
                    <td><?php echo $value["price"] ?></td>
                    <td><?php echo $value["is_deleted"] ?></td>
                    <td><a href="subcategories_db.php"?edit="<?php $value["subcategory_id"] ?>">Edit</a></td>
                </tr>
                <?php }
                ?>
            </tbody>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>

        </table>

    </body>
</html>