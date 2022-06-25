<html>
    <head>
        <title>Categories</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="categories">
    
        <form method="post" action="process_categories.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>CATEGORIES <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
                        <!-- category_id is an AUTO INCREMENT in the database. -->
   
                        <li><label for="name">ADD CATEGORY NAME :</label>
                        <input type="name" id="name" name="category_name"></li><br>

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