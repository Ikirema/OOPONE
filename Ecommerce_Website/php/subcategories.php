<html>
    <head>
        <title>Subcategories</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="subcategories">
        
        <form method="post" action="process_subcategories.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>SUBCATEGORIES <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
                       <!-- subcategory_id is an AUTO INCREMENT in the database. -->

                        <li><label for="name">ADD SUBCATEGORY NAME :</label>
                        <input type="name" id="name" name="subcategory_name"></li><br>

                        <label for="category_id"> ADD Category: </label>
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

                        <li><label for="id"> PRICE : </label>
                        <input type="price" id="price" name="price"></li><br>

                        <!-- is_deleted is a default ENUM in the database. -->


            <li><input type="SUBMIT" id="sbmt" class="button"/></li><br>

            <p>ADMIN CUSTOMIZATION INTERFACE: <a href="http://localhost/Ecommerce_Website/php/admin_interface.php">SWITCH</a>.</p><br>

			<a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>
    
                </ul>
            </fieldset>
            </div>
        </form>

    </body>
</html>