<?php
$custname =$_['custname']
$cnumb = $_['creditcardnumber']
$address = $_['address']


$sql = "SELECT product_name, product_price FROM f35ee.flrproducts";
if(!$result = mysqli_query($conn, $sql)){
    echo "Something went wrong when fetching data from database: " . mysqli_error($conn);
}

            for($i = 0; $i < count($_SESSION['cart']); $i++){

                 $row = mysqli_fetch_assoc($result);

                 if($_SESSION['cart'][$i] > 0){

                   $_SESSION['cart'][$i];
                    $row['product_name']  
                    $row['product_price']

                    $sql = "INSERT INTO f35ee.de_sales (receipt_no, product_id, quantity) VALUES ($rand, ($i + 1), $quan)";
                    if(!$hejsan = mysqli_query($conn, $sql)){
                        echo "Something went wrong when inserting data into database: " . mysqli_query($conn);
                    }
                    $_SESSION['cart'][$i] = 0; //Clears the cart.
                 }
             }
?>
