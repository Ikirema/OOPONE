<html>
    <head>
        <title>ADMIN LOGIN</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="adminlogin">
        
        <form method="post" action="process_admin_login.php">
           <div style="position: absolute; left:450px; top: 20px;">
            <h1>PRIME DESIGNERS <span>ADMINLogin</span></h1>
            <fieldset class="fieldset1">
               
                     <li><label for="admin_id">Admin_id :</label>
                     <input type="admin_id" id="admin_id" name="admin_id"></li><br>

                     <li><label for="email">Email :</label>
                     <input type="email" id="email" name="email"></li><br>

                     <li><label for="password">Password :</label>
                     <input type="password" id="password" name="password"></li><br>

                     <p>ADMIN ONLY : <a href="http://localhost/Ecommerce_Website/php/categories.php"><br><br><input type="SUBMIT" id="login"></a></p>
					  <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
  
            </fieldset>
            </div>
        </form>
        
    </body>
</html>