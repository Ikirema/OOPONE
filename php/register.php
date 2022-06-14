<html>
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="bodyregister">
        
        <form method="post" action="process_register.php">
           <div style="position: absolute; left:450px; top: 20px;">
            <h1>REGISTRATION <span>FORM</span></h1>
            <fieldset class="fieldset1">
                <ul>
            <li><label for="user_id">USER ID :</label>
            <input type="user_id" id="user_id" name="user_id"></li><br>

            <li><label for="fname">Firstname :</label>
            <input type="text" id="fname" name="firstname"></li><br>

            <li><label for="lname">lastname :</label>
            <input type="text" id="lname" name="lastname"></li><br>

            <label for="gnd">GENDER :</label>
            <li><label for="gender1">Male :</label>
                <input type="radio" id="gender1" name="gender" value="Male"></li><br>
                <li><label for="gender2">Female :</label>
                    <input type="radio" id="gender2" name="gender" value="Female"></li><br>

            <li><label for="pnumber">Phonenumber :</label>
            <input type="text" id="pnumber" name="phonenumber"></li><br>

            <li><label for="Dob">Dateofbirth :</label>
            <input type="date" id="Dob" name="dateofbirth"></li><br>

            <li><label for="email">Email :</label>
            <input type="email" id="email" name="email"></li><br>

            <li><label for="password">Password :</label>
            <input type="password" id="password" name="password"></li><br>

            <li><label for="role">Role :</label>
            <input type="role" id="role" name="role"></li><br>

            <li><label for="is_deleted">Is_Deleted :</label>
            <input type="is_deleted" id="is_deleted" name="is_deleted"></li><br>

            <li><input type="SUBMIT" id="sbmt"></li><br>

            <p>Already have an account? <a href="http://localhost/Ecommerce_Website/php/login.php">Login here</a>.</p>
			
			 <a href="http://localhost/Ecommerce_Website/php/home.php">HOME</a>
    
                </ul>
            </fieldset>
            </div>
        </form>

        
    </body>
</html>