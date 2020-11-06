<?php
    include "dbconnect.php";
    include "setup_session.php";
    if (isset($_GET['empty'])) {
    	unset($_SESSION['cart']);
    	header('location: ' . $_SERVER['PHP_SELF']);
    	exit();
    }
   
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="slider.js"></script>   
</head>
<body>
    <header>
       <div class= logo><img src="pic\logo.png" > 
        </div>                  
            <nav>                
                <div class ="subNav">
                    <ul>
                        <a href="cart.php">Cart</a><br>
                        <a href="#">About Us</a><br>
                    </ul>
                </div>
                <div class= "mainNav">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>&nbsp&nbsp
                            <a href="products.html">Products</a>&nbsp&nbsp
                            <a href="contactus.html">Contacts</a><br><br>
                            <input type="text" placeholder="Search..">
                        </li>
                    </ul>
                </div>
            </nav>

    </header>
    <main>
        <h1 class= producttitle>Toilet Lights</h1>
        <div class="row"></div>
        <div class="product1">
          <div class="card">
            <img src="pic/toilet1.jpg" alt="toilet1" style="width:100%" height= 300px>
            <div class="container">
              <h2>Bowlight</h2>
              <p class="title">Too lazy to on the toilet light in the middle of the night?</p>
              <p>No problem! Just open the lid!</p>
              <a href='php/addtocart.php?7=true'>Add to Cart</a> 
            </div>
          </div>
        </div>
      
        <div class="product2">
          <div class="card">
            <img src="pic/toilet2.jpg" alt="toilet2" style="width:100%" height= 300px>
            <div class="container">
              <h2>Mirror light</h2>
              <p class="title">Simple, beautiful</p>
              <p>Like you </p>
              <a href='php/addtocart.php?8=true'>Add to Cart</a> 
    </main>
        
    <div id="footer">
        <i>Copyright &copy; 2020 flr.</i><br>
        <a href="mailto:flr@lights.com">flr@lights.com</a>
    </div>
</body>
</html>