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

                <!-- user_id is an AUTO INCREMENT in the database. -->

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

            <label for="role_id">Insert Role: </label>
                <select name="role_id" id="role_id">
                    <?php
                    require_once("connect.php");
                    $sql = "SELECT * FROM tbl_roles";
                    $result = mysqli_query($conn, $sql); 

                    while ($role_id = mysqli_fetch_array(
                    $result,MYSQLI_ASSOC)):; 
                    ?>
                    <option value="<?php echo $role_id["role_id"];?>"><?php echo $role_id["rolename"];  ?>
                    </option> <?php endwhile; ?>
                </select><br><br>

                <!-- is_deleted is a default ENUM in the database. -->

            <li><input type="SUBMIT" id="sbmt" class="button"></li><br>

            <p>Already have an account? <a href="http://localhost/Ecommerce_Website/php/login.php">Login here</a>.</p><br>
			
			<a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>
    
                </ul>
            </fieldset>
            </div>
        </form>

        
    </body>
</html>