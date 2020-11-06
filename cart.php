<?php
    include "php/setupsession.php";
  
    if (isset($_GET['empty'])) {
        unset($_SESSION['cart']);
        header('location: ' . $_SERVER['PHP_SELF']);
        exit();
    }

?>
<html>
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
            </nav>
               <div class="content" id="rightcolumn">
		<p id="title"><h1>My Shopping cart</h1></p>

		<table class="order_summary">
                <thead>
                    <tr>
                        <th align='left' width='25%'>Item</th>
                        <th align='left' width='25%'>Quantity</th>
                        <th align='left' width='25%'>Unit Price</th>
                        <th  align='left' width='10%' >
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $total = 0;
                        
                        $servername = "localhost";
            $username = "f35ee";
            $password = "f35ee";
            $database = "f35ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
session_start();
                        $sql = "SELECT product_name, product_price FROM f35ee.flrproducts";
                        if(!$result = mysqli_query($conn, $sql)){
                            echo "Unable to fetch data: " . mysqli_error($conn);
                        }
                        for($i = 0; $i < count($_SESSION['cart']); $i++){
                             $row = mysqli_fetch_assoc($result);
                             if($_SESSION['cart'][$i] > 0){
                             $numcheck=$i+1;
                                echo "<tr id='rowdata'>";
                                echo "<td align='left'>" .$row['product_name']. "</td>";
                                echo "<td align='left'> " .$_SESSION['cart'][$i]. "</td>";
                                echo "<td align='left'>$ " .$row['product_price']. "</td>";
                                echo "</tr>";
                                $total = $total + (double)$row['product_price'] * (int)$_SESSION['cart'][$i];
                             }
                         }
                        echo "<tr>";
                       
                        echo "<td colspan='4' align='right' ><br>Total Price <u>$" . number_format($total, 2) . "</u></td>";
                        
                        echo "</tr>";
                    ?>
                </tbody>
            </table>
            <a href= products.html>continue shopping</a>
            <a href= payment.html>Checkout</a>             
		
			  
	
	</div>
    </header>
    <main>
	    
    </main>
        
    <div id="footer">
        <i>Copyright &copy; 2020 flr.</i><br>
        <a href="mailto:flr@lights.com">flr@lights.com</a>
    </div>
</body>
</html>