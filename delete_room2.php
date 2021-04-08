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


$h = $_POST['hotnum'];
$hg = $_POST['hotelgr'];
$hr = $_POST['hotel_room'];

echo $h;
echo $hg;
echo $hr;


$sql = "DELETE FROM hotel_room WHERE Room_ID = $hr";

if ($conn->query($sql) === TRUE ) {
    echo "Record successfully erased. Press Home to return to home page";
	$addone = "UPDATE hotel SET Rooms_Num = Rooms_Num - 1 WHERE hotel.Hotel_ID = $h" ;
	$conn->query($addone);
} else {
    echo "Deletion failed. Press press try again to reenter data";
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