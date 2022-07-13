<?php
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    if($product== "" || $quantity == NULL){
        http_response_code(400);
    }else{
        echo "<b>Order successful! Here is what you ordered</b>";
    echo "<br/>";
    if ($product == "Men") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/product.jpg" alt="">
            
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-bottom : 20px">';
        }
    }else if ($product == "Women") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/menu.jpg"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }else if ($product == "Children") {
        for ($i=1; $i <= $quantity; $i++) { 
            echo '<img src ="../images/menu.jpg"
            style="width:300px;
            height:200px;
            margin-right : 20px
            margin-top : 20px">';
        }
    }
    }

?>