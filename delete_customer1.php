<!DOCTYPE HTML>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "51423";
$dbname = "ergasia4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$irs = $_POST['irs'];


$sql = "DELETE FROM customer WHERE customer.IRS_Num = $irs";

$conn->query($sql);

$aftersql = "DELETE FROM reserves WHERE IRS_Cust = $irs";

$conn->query($aftersql);

$postaftersql = "DELETE FROM rents WHERE IRS_Cust = $irs";

$conn->query($postaftersql);
echo "customer's data and all actions concerning him successfully deleted" ;

$conn->close();
?>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>