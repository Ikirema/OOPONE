<!DOCTYPE html>
<html>
    <head>
        <title>View Categories.</title>
        <link rel="stylesheet" type="text/css" href="../css/users.css">

    </head>
    <body>
        <table class="table">
            <thead>
                <th>category_id</th>
                <th>category_name</th>
                <th>is_deleted</th>
                <th>Action</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("categories_db.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["category_id"] ?></td>
                    <td><?php echo $value["category_name"] ?></td>
                    <td><?php echo $value["is_deleted"] ?></td>
                    <td><a href="categories_db.php"?edit="<?php $value["category_id"] ?>">Edit</a></td>
                </tr>
                <?php }
                ?>
            </tbody>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>

        </table>

    </body>
</html>