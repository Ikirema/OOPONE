<?php
$user_id = $_POST['user_id'];

require("connect.php");
$sql = "SELECT * FROM tbl_users where user_id='$user_id'";
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $data = mysqli_fetch_assoc($result);
            echo "<div class='product_wrapper'>
        <form action='edituserprocess.php' method='POST'>
        <input type='hidden' name='hiddenuser_id' value=".$user_id." />
        <p>User_id:</p>
        <input type='text' name='user_id' value=".$data['user_id']." />
        <p>First Name:</p>
        <input type='text' name='firstname' value=".$data['firstname']." />
        <p>Last Name:</p>
        <input type='text' name='lastname' value=".$data['lastname']." />
        <p>Email:</p>
        <input type='text' name='email' value=".$data['email']." />
        <p>Password:</p>
        <input type='text' name='password' value=".$data['password']." />
        <p>Phone Number:</p>
        <input type='text' name='phonenumber' value=".$data['phonenumber']." />
        <p>Date of Birth:</p>
        <input type='text' name='dateofbirth' value=".$data['dateofbirth']." />
        <p>Gender:</p>
        <input type='text' name='gender' value=".$data['gender']." />
        <p>Role_id:</p>
        <input type='text' name='role_id' value=".$data['role_id']." />
        <p>Is Deleted:</p>
        <input type='text' name='is_deleted' value=".$data['is_deleted']." />

        
        
     
        <button type='submit' class='btn2'>Save</button>
        
        </form>
        </div>";


}




?>
