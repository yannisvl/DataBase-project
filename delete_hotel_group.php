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


$hotel_group = $_POST['hotel_group'];


$hotel = $conn->query("SELECT *
FROM hotel WHERE hotel.hotel_group_ID = $hotel_group
ORDER BY hotel.Hotel_ID");

while ($row = mysqli_fetch_assoc($hotel)) {
	$hotelroom = $conn->query("SELECT * FROM hotel_room WHERE hotel_room.Hotel_ID = $row[Hotel_ID]");
	while ($row1 = mysqli_fetch_assoc($hotelroom)) {
		$conn->query("DELETE FROM rents WHERE rents.Room_ID = $row1[Room_ID]");
		$conn->query("DELETE FROM reserves WHERE reserves.Room_ID = $row1[Room_ID]");
	}
	$conn->query("DELETE FROM hotel_room WHERE hotel_room.Hotel_ID = $row[Hotel_ID]");
	$conn->query("DELETE FROM works WHERE works.Hotel_ID = $row[Hotel_ID]");
}

$conn->query("DELETE FROM hotel_group WHERE hotel_group.Hotel_group_ID = $hotel_group");
echo 'Hotel group included all of his hotels and rooms deleted successfully !';
$conn->close();
?>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>