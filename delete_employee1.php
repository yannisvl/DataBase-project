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


$sql = "DELETE FROM employee WHERE employee.IRS_Num = $irs";

$conn->query($sql);

$aftersql = "DELETE FROM works WHERE IRS_Emp = $irs";

$conn->query($aftersql);

$postaftersql = "DELETE FROM rents WHERE IRS_Emp = $irs";

$conn->query($postaftersql);
echo "employee's data and all actions concerning him successfully deleted" ;

$conn->close();
?>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>