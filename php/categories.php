<html>
    <head>
        <title>Categories</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="categories">
    <?php require("connect.php"); ?>
        <form method="post" action="process_categories.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>CATEGORIES <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
                        <li><label for="id"> ADD CATEGORY ID : </label>
                        <input type="id" id="id" name="category_id"></li><br>
   
                        <li><label for="name">ADD CATEGORY NAME :</label>
                        <input type="name" id="name" name="category_name"></li><br>

                        <li><label for="name">IS DELETED :</label>
                        <input type="del" id="del" name="is_deleted"></li><br>

                        <li><input type="SUBMIT" id="sbmt" class="button"/></li><br>

        <p>category id and name ALREADY EXISTING :</p>
            <?php
            require("connect.php");
                $sql = "SELECT * FROM tbl_categories " ;
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                        echo "<option value='" .$row['category_id']."'>" .$row['category_id'] ." - ".$row['category_name']. "</option>";
                        
                    }
                   }
                }
            ?>
           
            <p>Already have a category? ADD SUBCATEGORY.<a href="http://localhost/Ecommerce_Website/php/subcategories.php">ADD HERE</a>.</p>
			
			 <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
    
                </ul>
            </fieldset>
            </div>
        </form>

    </body>
</html>