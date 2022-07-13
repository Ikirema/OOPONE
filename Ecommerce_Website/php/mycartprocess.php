<?php
$hiddenid = $_POST['hiddenid'];
$id = $_POST['id'];
$name = $_POST['name'];
$code = $_POST['code'];
$image = $_POST['image'];
$price = $_POST['price'];



require("connect.php");
$sql = "UPDATE tblproduct SET `id`='$id',`name`='$name',`code`='$code', `image` = '$image',`price`='$price' WHERE id = '$hiddenid'";
$result = mysqli_query($conn, $sql);

if($result = mysqli_query($conn, $sql)){
    echo "<p>  Item order Successful updated. </p>";

            
                }

?>
