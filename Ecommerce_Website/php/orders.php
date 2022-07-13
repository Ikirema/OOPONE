<!DOCTYPE html>
<Html>

<head>
    <title>
        Orders
    </title>
    <link rel="stylesheet" href="../css/layout.css">
</head>
<Body class="orders">
    <form method="post" action="process_orders.php" enctype="multipart/form-data">
        <div style="position: absolute; left:450px; top: 10px;">
        <h1>ORDERS <span>FORM</span></h1><br>
        <h1>AUTHORIZED <span>personel only</span></h1>
        <fieldset class="fieldset1">
                   
            <!-- item_id is an AUTO INCREMENT in the database. -->
               
                <p>insert Item name:
                    <input type="text" name="name" placeholder="name">
                </p>

                <p>insert Item code:
                    <input type="text" name="code" placeholder="code">
                </p>

                <p>Insert Item Image:
                    <input type="file" name="image" placeholder="image">
                </p>
        
                <p>Insert Item Price:
                    <input type="text" name="price" placeholder="price">
                </p>

        
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