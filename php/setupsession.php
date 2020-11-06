<?php
session_start();

$servername = "localhost";
$username = "f35ee";
$password = "f35ee";
$database = "f35ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "use f35ee";
if (!mysqli_query($conn, $sql)) {
	echo "Failed to switch tables, check use statement.";
	mysqli_close($conn);
}



$sql = "SELECT product_id, product_price FROM f35ee.flrproducts";
if(!$result = mysqli_query($conn, $sql)) {
	echo "Something went wrong when fetching product info: " . mysqli_error($conn);
}
if(!isset($_SESSION["cart"])){
    $_SESSION['cart'] = array();
    for($i = 0; $i < $result->num_rows; $i++){
	    $row = $result->fetch_assoc();
	    array_push($_SESSION['cart'], 0);
	}
}
?>