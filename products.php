<?php
    include_once "includes/dbconn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shoe Store | Ecommerce Website Project</title>
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
        <header>
            <div class="logo">
                <img src="images/logo1.jpg" width="125" alt="Load error">
            </div>       
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="#footer">About</a></li>
                    <li><a href="#footer">Contacts</a></li>
                </ul>
            </nav>
            <a href="#shopping-cart">
                <div class="cart">
                    <img src="images/cart2.png" alt="shopping cart">
                </div>
            </a>
        </header>
   <!-- display products with php pagination -->
        <div class="products">
            <script src="htps://umpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
            <script src="bs5/js/bootstrap.js"></script>
                <!--create formating for displaying products  -->
                
            <div class="row"> 
            
                <?php
                    include_once "includes/pagination.php";
                ?>
        </div>
   <footer>
       
   </footer>
</body>
</html>