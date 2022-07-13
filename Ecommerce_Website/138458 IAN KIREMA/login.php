 <html>
    <head>
        <title>LOGIN</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="bodylogin">
        
        <form method="" action="">
           <div style="position: absolute; left:450px; top: 20px;">
            <h1>PRIME DESIGNERS <span>Login</span></h1>
            <fieldset class="fieldset1">
               

                     <li><label for="email">Email :</label>
                     <input type="email" id="email" name="email"></li><br>

                     <li><label for="password">Password :</label>
                     <input type="password" id="password" name="password"></li><br>

                     <a href="http://localhost/Ecommerce_Website/php/users_products.php"><br><br><input type="SUBMIT" id="login" class="button"></a></p><br>

                     <p>Don't have an account? <a href="http://localhost/Ecommerce_Website/php/register.php">SignUp here</a>.</p>
                     <p>I AM AN ADMIN <a href="http://localhost/Ecommerce_Website/php/admin_login.php">ADMIN LOGIN</a>.</p>

                     <a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>

    
                
            </fieldset>
            </div>
        </form>
        
    </body>
</html> 



<!-- <?php

@include 'connect.php';

session_start();

if(isset($_POST['submit'])){

  
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
 

   $select = " SELECT * FROM tbl_users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/layout.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html> -->