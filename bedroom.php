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
                    <a href="cart.php">cart</a><br>
                    <a href="aboutus.html">About Us</a><br>
                    <a href="reg.html">Register Now</a><br>
                    
                </ul>
            </div>
            <div class= "mainNav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>&nbsp&nbsp
                        <a href="products.html">Products</a>&nbsp&nbsp
                        <a href="contactus.html">Contacts Us</a>
          

                        <input type="text" placeholder="Search..">
                    </li>
                </ul>
            </div>
        </nav>

</header>
    <main>
      <h1 class= producttitle>Bedroom Lights</h1>
        <div class="row"></div>
        <div class="product1">
          <div class="card">
            <img src="pic/bedroom1.jpg" alt="bedroom1" style="width:100%" height= 300px>
            <div class="container">
              <h2>Rectanglight</h2>
              <p class="title">Rectangular lights</p>
              <p>Not every light deserves a story</p>
              <a href='php/addtocart.php?1=true'>Add to cart</a>
            </div>
          </div>
        </div>
      
        <div class="product2">
          <div class="card">
            <img src="pic/bedroom2.jpg" alt="bedroom2" style="width:100%" height= 300px>
            <div class="container">
              <h2>Egglights</h2>
              <p class="title">Notice the plurality</p>
              <p>Because theres 2 eggs</p>
              <a href='php/addtocart.php?2=true'>Add to cart</a> 
    </main>
        
    <div id="footer">
        <i>Copyright &copy; 2020 flr.</i><br>
        <a href="mailto:flr@lights.com">flr@lights.com</a>
    </div>
</body>
</html>