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

$hotelgr = $_POST['hotel_group'];

echo '<form action="delete_room1.php" method="post">';


$hotel = $conn->query("SELECT Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Hotel_ID
FROM hotel WHERE hotel_group_ID = $hotelgr
ORDER BY hotel.Hotel_ID");


echo 'Hotel Address:
<select name="hotelnum" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotel)) {
	echo '<option name = "" value="'.$row[Hotel_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].'</option>';
}

echo '
<input type="hidden" name = "hotelgr" value = "'.$hotelgr.'";?>
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';

?>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>