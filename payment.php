<!DOCTYPE html>
<html lsng="en">
<head>
    <title>FLR contact us</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    
    <script type= "text/javascript" src="reg.js">
    </script>
</head>
<body>

    <header>
        <div class = logo><img src="pic\logo.png" > 
        </div>              
            <nav>                
                <div class ="subNav">
                    <ul>
                        <a href="cart.php">Cart</a><br>
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

        <div id="paymentform">
            <h1>Payment Information</h1>
            <p>Select payment option</p>
            
            <form action="showget.php" method="get">
               
                    <label>
                        *Name on card: 
                        <input type="text" id="custname" onchange ="validateName() size="30" required>
                    </label><br><br>
                    <label>
                    
                        *Credit card number:
                        <input type="text" id="creditcardnumber" onchange="validatecreditcardnumb()" size="16" required>
                    </label><br><br>
                    <label>

                    <label>
                        *Address: 
                        <input type="text" id="address" onchange ="validateName() size="30" required>
                    </label><br><br>
                    <label>
                    <button class = "productbutton" type="submit" name="bedroom2"> 
                        Submit payment
                    </button> 
                     
                    
                
            </form>
        </div>
        <div id="footer">
            <i>Copyright &copy; 2020 flr.</i><br>
        <a href="mailto:flr@lights.com">flr@lights.com</a>
        </div>
    </div>
</body>
</html>
<!-- 
<?php 
$conn = mysqli_connect($servername, $username, $password, $database);
$db =mysqli_setupdb($conn,'transactiontable')

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $query = "UPDATE `transactiontable` SET custname='$_POST[custname]',address='$_POST[address]'"
}
 -->
