<!DOCTYPE html>
<html>
    <head>
        <title>View Users.</title>
        <link rel="stylesheet" type="text/css" href="../css/users.css">

    </head>
    <body>
        <table class="table">
            <thead>
                <th>user_id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>phonenumber</th>
                <th>dateofbirth</th>
                <th>email</th>
                <th>password</th>
                <th>gender</th>
                <th>role_id</th>
                <th>is_deleted</th>
                <th>Action</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("usersdb.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["user_id"] ?></td>
                    <td><?php echo $value["firstname"] ?></td>
                    <td><?php echo $value["lastname"] ?></td>
                    <td><?php echo $value["phonenumber"] ?></td>
                    <td><?php echo $value["dateofbirth"] ?></td>
                    <td><?php echo $value["email"] ?></td>
                    <td><?php echo $value["password"] ?></td>
                    <td><?php echo $value["gender"] ?></td>
                    <td><?php echo $value["role_id"] ?></td>
                    <td><?php echo $value["is_deleted"] ?></td>
                    <td><a href="usersdb.php"?edit="<?php $value["user_id"] ?>">Edit</a></td>
                </tr>
                <?php }
                ?>
            </tbody>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>

        </table>

    </body>
</html>