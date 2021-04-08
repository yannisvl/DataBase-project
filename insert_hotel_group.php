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

$strad = $_POST['strad'];
$numad = $_POST['numad'];
$postcod = $_POST['postcod'];
$cit = $_POST['cit'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$result = "SELECT * FROM hotel_group";
$myid = mysqli_num_rows($conn->query($result));
$myid++;

$sql = "INSERT INTO hotel_group (Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Num_of_hotels, Hotel_Group_ID) VALUES('$strad', $numad, $postcod, '$cit', 0, $myid)";
#print($em = "INSERT INTO email_addr_hg (email, email_addr_hg.hotel_group_ID) VALUES ('$email', $myid)");
$em = "INSERT INTO email_addr_hg (email, email_addr_hg.hotel_group_ID) VALUES ('$email', $myid)";
#print($ph = "INSERT INTO phone_NUM_hg (phone, phone_NUM_hg.hotel_group_ID) VALUES ($phone, $myid)");
$ph = "INSERT INTO phone_NUM_hg (phone, phone_NUM_hg.hotel_group_ID) VALUES ($phone, $myid)";

#print($sql = "INSERT INTO hotel_group (Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Num_of_hotels, Hotel_Group_ID) VALUES('$strad', $numad, $postcod, '$cit', 0, $myid)");
if ($conn->query($sql) === TRUE and $conn->query($em) === TRUE and $conn->query($ph) === TRUE) {
    echo "New record created successfully. Press Home to return to home page";
} else {
    echo "Insertion failed. Press try again to reenter data";
}

$conn->close();
?>
	<form>
	<input type="button" value="try again!" onclick="history.back()">
	</form>

	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>

