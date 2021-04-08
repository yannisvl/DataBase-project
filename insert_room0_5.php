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
?>
<form action="insert_room.php" method="post">
  
<?php  
$hotelgr = $_POST['hotel_group']; 

$hotel = $conn->query("SELECT Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Hotel_ID
FROM hotel WHERE hotel.hotel_group_ID = $hotelgr
ORDER BY hotel.Hotel_ID");
?>
Hotel Address:
<br>
<input type="hidden" name = "hotelgr" value="<?php echo "$hotelgr" ?>">
<select name="myhotel" style="width:550px">; 
<option name="" value="">Select...</option>;
<?php
while ($row = mysqli_fetch_assoc($hotel)) {
	echo '<option name="hotelgr" value="'.$row[Hotel_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].'</option>';
}
?>
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>
  </body>
</html>