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
date_default_timezone_set('Europe/Athens');
$date = date('Y-m-d H:i:s');
$irs = $_POST["irs"];
$str = $_POST['street'];
$sno = $_POST['street_number'];
$poc = $_POST['postal_code'];
$cit = $_POST['city'];
$ssn = $_POST['ssn'];
$fir = $_POST['firstname'];
$iir = $_POST['lastname'];

#print("INSERT INTO Customer (IRS_Num, Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, First_Reg, Social_Sec_Num, First_Name, Last_Name) VALUES($irs, '$str', $sno, $poc, '$cit', '$date', $ssn, '$fir', '$iir')");
$presql = "SELECT * FROM customer WHERE IRS_Num=$irs";

if (mysqli_num_rows($conn->query($presql)) == 1){
	echo "IRS number already exists please reenter your data";
}
else{ 
	$sql = "INSERT INTO Customer (IRS_Num, Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, First_Reg, Social_Sec_Num, First_Name, Last_Name) VALUES($irs, '$str', $sno, $poc, '$cit', '$date', $ssn, '$fir', '$iir')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully. Press Home to return to home page";
	} 
	else {
		echo "Invalid information. Press Try again to reenter data";
	}
}
?>
	<form>
	<input type="button" value="try again!" onclick="history.back()">
	</form>


	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>
