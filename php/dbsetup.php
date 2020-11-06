<!-- connecting to database -->
<?php
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

// adding tables in database
$sql = "CREATE TABLE IF NOT EXISTS flrproducts (
    product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    product_name VARCHAR(30) NOT NULL,
    product_quantity int NOT NULL,
    product_price DOUBLE NOT NULL)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating Products table: ". mysqli_error($conn);
    mysqli_close($conn);
}

$sql ="SELECT COUNT (*) As RowCnt FROM flrproducts;";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);
if ($row[0]>0 ) {

    mysqli_close($conn);
}
// insert product table
else{
$sql = "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'bedroom1',100 ,30);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'bedroom2',100 ,35);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'livingroom1',100, 50);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'livingroom2',100, 45);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'outdoor1',100, 59);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'outdoor2',100, 75);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'toilet1',100, 55);";
$sql .= "INSERT INTO flrproducts (product_id, product_name, product_quantity, product_price) VALUES (NULL, 'toilet2',100, 25);";
}


if (!mysqli_multi_query($conn, $sql)) {
	echo "Failed to fill tables with data: " . mysqli_error($conn);
	mysqli_close($conn);
}



$sql = "CREATE TABLE IF NOT EXISTS transactiontable (
    transaction_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name_on_card VARCHAR(30) NOT NULL,
    product_name VARCHAR(30) NOT NULL, 
    product_quantity int NOT NULL,
    )";
    

if (!mysqli_query($conn, $sql)) {
    echo "Error creating Products table: ". mysqli_error($conn);
    mysqli_close($conn);
}

$sql = "SELECT product_price FROM transactiontable WHERE product_id = $id;";
	if ($result = mysqli_query($conn, $sql)) {
		
		$row = mysqli_fetch_row($result);
		echo number_format((float)$row[0], 2, '.', '');
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);




?>