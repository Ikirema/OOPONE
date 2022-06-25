<?php
require("connect.php");

$sql = "SELECT user_id, firstname, lastname, email, password, phonenumber, gender, dateofbirth, role, is_deleted FROM tbl_users";
$result = mysqli_query($conn, $sql);

print_r($result);

if(mysqli_query($conn, $sql)){
    echo "<br><br>CONTENT SELECTED SUCCESSFULLY!";
}
else{
    echo "<br><br>CONTENT NOT SELECTED!" .mysqli_error($conn);
}

if(mysqli_num_rows($result) > 0 ){
    //output data of each row
    $row = mysqli_fetch_assoc($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";

    /*while($row = mysqli_fetch_assoc($result)){
        echo "user_id: ".$row["user_id"]. "firstname: ".$row["firstname"]. "lastname: ".$row["lastname"]. "email: ".$row["email"]. "password: ".$row["password"]. "phonenumber: ".$row["phonenumber"]. "gender: ".$row["gender"]. "dateofbirth: ".$row["dateofbirth"]. "role: ".$row["role"]. "is_deleted: ".$row["is_deleted"]."<br><br>";
    }*/
}

?>