<?php
    require('connect.php');
    
    if (isset($_POST['upload'])){

        $filename = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        $folder = "product-images/".$filename;

        $name = $_POST['name'];
        $code = $_POST['code'];
        $price = $_POST['price'];
        

        if(empty($name)||empty($price)){
            echo "Kindly input details!";
        }else{
            $sql = "INSERT INTO tblproduct(name, code, image, price) VALUES ('$name','$code','$folder','$price')";

        if(mysqli_query($conn, $sql)){
            if(move_uploaded_file($temp_name, $folder)){
                echo "<h3> Item added succesfully!</h3>";
            }else {
                echo "<h3>Failed to add product!</h3>";
            }
        }else{
            echo "Error: Product not added".mysqli_error($conn);
        }

        }


    }


?>