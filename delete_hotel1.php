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


$hotelnum = $_POST['hotelnum'];


	$hotelroom = $conn->query("SELECT * FROM hotel_room WHERE hotel_room.Hotel_ID = $hotelnum");
	while ($row1 = mysqli_fetch_assoc($hotelroom)) {
		$conn->query("DELETE FROM rents WHERE rents.Room_ID = $row1[Room_ID]");
		$conn->query("DELETE FROM reserves WHERE reserves.Room_ID = $row1[Room_ID]");
	}
	$conn->query("DELETE FROM hotel_room WHERE hotel_room.Hotel_ID = $hotelnum");
	$conn->query("DELETE FROM works WHERE works.Hotel_ID = $hotelnum");
	
$conn->query("DELETE FROM hotel WHERE hotel.Hotel_ID = $hotelnum");
echo 'Hotel included all of his rooms deleted successfully !';
$conn->close();
?>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>