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


$hotnum = $_POST['hotelnum'];
$hotelgr = $_POST['hotelgr'];

  echo '<form action="delete_room2.php" method="post">';
  
  $hotelroom = $conn->query("SELECT Room_ID, Price, Capacity, Repairs_Need_Info, Expandable_Info, Vyu_Info, TV, Air_Condition, Swimming_Pool, WiFi,Microwave_Oven, Breakfast 
  FROM hotel_room WHERE Hotel_ID = $hotnum
ORDER BY Room_ID");

echo 'Hotel room to be deleted:
<br>
<select name="hotel_room" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelroom)) {
	
	echo '<option name="" value="'.$row[Room_ID].'">'.$row[Price]."€, ".$row[Capacity]." persons";
	echo '</option>';
}
echo '
</select><br><br>
  <input type="hidden" name = "hotnum" value = "'.$hotnum.'">
  <input type="hidden" name = "hotelgr" value = "'.$hotelgr.'">

  <input type="submit" value="Submit">
  </form>';


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