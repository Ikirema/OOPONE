<html>
    <head>
        <title>ADMIN LOGIN</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="admin">
        
        <form method="post" action="process_admin_login.php">
           <div style="position: absolute; left:450px; top: 20px;">
            <h1>PRIME DESIGNERS <span>ADMINLogin</span></h1>
            <fieldset class="fieldset1">
               

                     <li><label for="email">Email :</label>
                     <input type="email" id="email" name="email"></li><br>

                     <li><label for="password">Password :</label>
                     <input type="password" id="password" name="password"></li><br>

                     <p>ADMIN ONLY : <a href="http://localhost/Ecommerce_Website/php/admin_interface.php"><br><br><input type="SUBMIT" id="login" class="button"></a></p>

                     <a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>
  
            </fieldset>
            </div>
        </form>
        
    </body>
</html>