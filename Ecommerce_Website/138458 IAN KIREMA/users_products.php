<html>
    <head>
        <title>Available Products.</title>

        <link rel="stylesheet" href="../css/layout.css"> 
    </head>
    <body class="products">
        
        <form method="post" action="process_users_products.php">
            <div style="position: absolute; left:450px; top: 20px;">
            <h1>PRODUCTS <span>FORM</span></h1>

            <section class="menu" id="menu">
                                <h1 class="heading"> Our <span>Products</span></h1>
                                <div class="box-container">

                                    <div class="box">
                                        <img src="../images/menu2.jpg" alt="">
                                        <h3>Design and Fashion.</h3>
                                        <div class="price">sh.400 <span>sh.800</span></div>
                                        <a href="#" class="button">add to cart</a>
                                    </div> 

                                </div>

                            </section>

            <fieldset class="fieldset1">
                <ul>
                <label for="product">Products Available:</label>
                    <select id="product" name="product">
                        <option value="Cookie">Men</option>
                        <option value="Biscuit">women</option>
                        <option value="Cake">children</option>
                    </select>
                    <br>
                    <br>
                    <label for="quantity">Quantity : </label>
                    <input type="number" name="quantity" id="quantity"><br><br>


			        <a class="button" href="http://localhost/Ecommerce_Website/php/home.php">HOME</a><br><br>
    
                </ul>
            </fieldset>
            </div>
        </form>

    </body>
</html> 