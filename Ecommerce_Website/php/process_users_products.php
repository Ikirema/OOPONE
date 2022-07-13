<?php
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    if($product== "" || $quantity == NULL){
        http_response_code(400);
    }else{
        echo "<b>Order successful! Here is what you added to the cart.</b>";
    echo "<br/>";
    if ($product == "Men") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/menu2.jpg" alt="">
            
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-bottom : 20px">';
        }
    }else if ($product == "Women") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/menu2.jpg"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }else if ($product == "Children") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/menu2.jpg"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }
    }

?>