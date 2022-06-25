<html>
    <head>
        <title>Roles</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="roles">
    
        <form method="post" action="process_roles.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>ROLES <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
                        <!-- role_id is an AUTO INCREMENT in the database. -->
   
                        <li><label for="name">ADD ROLE NAME :</label>
                        <input type="name" id="name" name="rolename"></li><br>

                        <!-- is_deleted is a default ENUM in the database. -->

                        <li><input type="SUBMIT" id="sbmt" class="button"/></li><br>
           
            <p>Already have a role? ADD SUBCATEGORY.<a href="http://localhost/Ecommerce_Website/php/subcategories.php">ADD HERE</a>.</p>
			
			 <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
    
                </ul>
            </fieldset>
            </div>
        </form>

    </body>
</html>