<?php
$id = $_POST['id'];

require("connect.php");
$sql = "SELECT * FROM tblproduct where id='$id'";
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $data = mysqli_fetch_assoc($result);
            echo "<div class='product_wrapper'>
        <form action='mycartprocess.php' method='POST'>
        <input type='hidden' name='hiddenid' value=".$id." />
        <p>Item_id:</p>
        <input type='text' name='id' value=".$data['id']." />
        <p>Item Name:</p>
        <input type='text' name='name' value=".$data['name']." />
        <p>Code:</p>
        <input type='text' name='code' value=".$data['code']." />
        <p>Item Image:</p>
        <input type='text' name='image' value=".$data['image']." />
        <p>Item Price:</p>
        <input type='text' name='price' value=".$data['price']." />
        

        
        <button  type='submit' class='btn2'>save </button>
        
        </form>
        </div>";

}

?>
