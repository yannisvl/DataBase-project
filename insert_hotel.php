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


$str = $_POST['street'];
$sno = $_POST['street_number'];
$poc = $_POST['postal_code'];
$cit = $_POST['city'];
$aste = $_POST['stars'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hg = $_POST['hotel_group'];

$result = "SELECT * FROM hotel";
$myid = mysqli_num_rows($conn->query($result));
$myid++;

$sql = "INSERT INTO hotel (Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Stars, Rooms_num, Hotel_ID, Hotel_group_ID) VALUES('$str', $sno, $poc, '$cit', $aste, 0, $myid, $hg)";
#print($em = "INSERT INTO email_addr_hg (email, email_addr_hg.hotel_group_ID) VALUES ('$email', $myid)");
$em = "INSERT INTO email_addr_h (email, email_addr_h.hotel_ID) VALUES ('$email', $myid)";
#print($ph = "INSERT INTO phone_NUM_hg (phone, phone_NUM_hg.hotel_group_ID) VALUES ($phone, $myid)");
$ph = "INSERT INTO phone_NUM_h (phone, phone_NUM_h.hotel_ID) VALUES ($phone, $myid)";

#print($sql = "INSERT INTO hotel_group (Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Num_of_hotels, Hotel_Group_ID) VALUES('$strad', $numad, $postcod, '$cit', 0, $myid)");
if ($conn->query($sql) === TRUE and $conn->query($em) === TRUE and $conn->query($ph) === TRUE) {
    echo "New record created successfully. Press Home to return to home page";
	$addone = "UPDATE hotel_group SET Num_of_hotels = Num_of_hotels + 1 WHERE Hotel_Group_ID = $hg" ;
	$conn->query($addone);
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