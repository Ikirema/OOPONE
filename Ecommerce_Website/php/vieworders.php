<!DOCTYPE html>
<html>
    <head>
        <title>View Items.</title>
        <link rel="stylesheet" type="text/css" href="../css/users.css">

    </head>
    <body>
        <table class="table">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>code</th>
                <th>image</th>
                <th>item_price</th>
                <th>Action</th>
                
            </thead>

            <tbody>
                <?php
                    require_once("orders_db.php");
                    foreach ($test as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value["id"] ?></td>
                    <td><?php echo $value["name"] ?></td>
                    <td><?php echo $value["code"] ?></td>
                    <!-- <td><?php echo $value["image"] ?></td>  -->
                    <td><?php echo "<img src='".$value['image']."' style='width:100px; height: 100px;'>"; ?></td>
                    <td><?php echo $value["price"] ?></td>
                    
                    <td><?php
                        echo "<div class='product_wrapper'>
                            <form action='mycart.php' method='POST'>
                            
                            <input type='hidden' name='id' value=".$value['id']." />
                        
                        
                            <button type='Submit' class='btn2'>Edit </button>
                            
                            </form>
                            </div>";

                        ?></td>
                </tr>
                <?php }
                ?>
            </tbody>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p>

        </table>

    </body>
</html>