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


$hg = $_POST['hotelgr'];
$myhot =  $_POST['myhotel'];
?>

<form action="insert_room1.php" method="post">
<input type="hidden" name = "hg" value = "<?php echo "$hg";?>">
<input type="hidden" name = "myhot" value = "<?php echo "$myhot";?>">
  Price:<br>
  <input type="double" name="price" value="">
  <br>
 
<input type="checkbox" name="rn" value="1" />Repairs_Need<br />
<input type="checkbox" name="exp" value="1" />Expandable<br />
<input type="checkbox" name="vi" value="1" />View<br />

  Capacity:<br>
  <input type="int" name="cap" value="">
  <br>

Which facilities does the room have access to?<br />
<input type="checkbox" name="tv" value="1" />TV<br />
<input type="checkbox" name="ac" value="1" />Air Condition<br />
<input type="checkbox" name="sp" value="1" />Swimming Pool<br />
<input type="checkbox" name="wf" value="1" />Wifi<br />
<input type="checkbox" name="mw" value="1" />Microwave Oven<br />
<input type="checkbox" name="bf" value="1" />Breakfast<br><br>


  <input type="submit" value="Submit">
  </form>

</body>
</html>