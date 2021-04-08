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

if($_POST["myaction"]=="delete" and $_POST["myobject"]=="hotgr") {
  echo '<form action="delete_hotel_group.php" method="post">';
  
  $hotelgroup = $conn->query("SELECT Addr_Street, Addr_Number, Addr_City, Addr_Postal_Code, Phone, Email, hotel_group.Hotel_Group_ID
FROM hotel_group, phone_num_hg, email_addr_hg
WHERE hotel_group.Hotel_Group_ID = phone_num_hg.Hotel_Group_ID AND phone_num_hg.Hotel_Group_ID = email_addr_hg.Hotel_Group_ID
ORDER BY hotel_group.Hotel_Group_ID");

echo 'Hotel group Address, Phone and E-mail from which the hotel will be chosen:
<br>
<select name="hotel_group" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelgroup)) {
	echo '<option name="'.$row[Hotel_Group_ID].'"value="'.$row[Hotel_Group_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].", ".$row[Phone].", ".$row[Email].'</option>';
}
echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="delete" and $_POST["myobject"]=="hot") {
    echo '<form action="delete_hotel.php" method="post">';
  
  $hotelgroup = $conn->query("SELECT Addr_Street, Addr_Number, Addr_City, Addr_Postal_Code, Phone, Email, hotel_group.Hotel_Group_ID
FROM hotel_group, phone_num_hg, email_addr_hg
WHERE hotel_group.Hotel_Group_ID = phone_num_hg.Hotel_Group_ID AND phone_num_hg.Hotel_Group_ID = email_addr_hg.Hotel_Group_ID
ORDER BY hotel_group.Hotel_Group_ID");

echo 'Hotel group Address, Phone and E-mail from which the hotel will be chosen:
<br>
<select name="hotel_group" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelgroup)) {
	echo '<option name="'.$row[Hotel_Group_ID].'"value="'.$row[Hotel_Group_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].", ".$row[Phone].", ".$row[Email].'</option>';
}
echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="delete" and $_POST["myobject"]=="roo") {
  echo '<form action="delete_room.php" method="post">';
  
  $hotelgroup = $conn->query("SELECT Addr_Street, Addr_Number, Addr_City, Addr_Postal_Code, Phone, Email, hotel_group.Hotel_Group_ID
FROM hotel_group, phone_num_hg, email_addr_hg
WHERE hotel_group.Hotel_Group_ID = phone_num_hg.Hotel_Group_ID AND phone_num_hg.Hotel_Group_ID = email_addr_hg.Hotel_Group_ID
ORDER BY hotel_group.Hotel_Group_ID");

echo 'Hotel group Address, Phone and E-mail from which the hotel will be chosen:
<br>
<select name="hotel_group" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelgroup)) {
	echo '<option name="'.$row[Hotel_Group_ID].'"value="'.$row[Hotel_Group_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].", ".$row[Phone].", ".$row[Email].'</option>';
}
echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="delete" and $_POST["myobject"]=="employee") {
  echo '<form action="delete_employee.php" method="post">
  IRS_number:<br>
  <input type = "int" name ="irs" value = "">
  <br>
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="delete" and $_POST["myobject"]=="client") {
    echo '<form action="delete_customer.php" method="post">
  IRS_number:<br>
  <input type = "int" name ="irs" value = "">
  <br>
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="update" and $_POST["myobject"]=="hotgr") {
  echo 6;
}
if($_POST["myaction"]=="update" and $_POST["myobject"]=="hot") {
  echo 7;
}
if($_POST["myaction"]=="update" and $_POST["myobject"]=="roo") {
  echo 8;
}
if($_POST["myaction"]=="update" and $_POST["myobject"]=="employee") {
  echo 9;
}
if($_POST["myaction"]=="update" and $_POST["myobject"]=="client") {
  echo 10;
}
if($_POST["myaction"]=="insert" and $_POST["myobject"]=="hotgr") {
  echo '<form action="insert_hotel_group.php" method="post">
  Street Address:<br>
  <input type="text" name="strad" value="">
  <br>
  Address Number:<br>
  <input type="int" name="numad" value="">
  <br>
  Postal Code:<br>
  <input type="int" name="postcod" value="">
  <br>
  City:<br>
  <input type="text" name="cit" value="">
  <br>
  Email:<br>
  <input type="text" name = "email" value = "">
  <br>
  Phone:<br>
  <input type = "int" name ="phone" value = "">
  <br>
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="insert" and $_POST["myobject"]=="hot") {
  echo '<form action="insert_hotel.php" method="post"> 
  Street:<br>
  <input type="text" name="street" value="">
  <br>
  Number:<br>
  <input type="int" name="street_number" value="">
  <br>
   Postal Code:<br>
  <input type="int" name="postal_code" value="">
  <br>
  City:<br>
  <input type="text" name="city" value="">
  <br>
  Stars:<br>
  <input type="int" name="stars" value="">
  <br>
  Email:<br>
  <input type="text" name = "email" value = "">
  <br>
  Phone:<br>
  <input type = "int" name ="phone" value = "">
  <br>
  <br>';
  
$hotelgroup = $conn->query("SELECT Addr_Street, Addr_Number, Addr_City, Addr_Postal_Code, Phone, Email, hotel_group.Hotel_Group_ID
FROM hotel_group, phone_num_hg, email_addr_hg
WHERE hotel_group.Hotel_Group_ID = phone_num_hg.Hotel_Group_ID AND phone_num_hg.Hotel_Group_ID = email_addr_hg.Hotel_Group_ID
ORDER BY hotel_group.Hotel_Group_ID");

echo 'Hotel group Address, Phone and E-mail:
<br>
<select name="hotel_group" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelgroup)) {
	echo '<option name="'.$row[Hotel_Group_ID].'"value="'.$row[Hotel_Group_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].", ".$row[Phone].", ".$row[Email].'</option>';
}
echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="insert" and $_POST["myobject"]=="roo") {
  echo '<form action="insert_room0_5.php" method="post">';
  
  $hotelgroup = $conn->query("SELECT Addr_Street, Addr_Number, Addr_City, Addr_Postal_Code, Phone, Email, hotel_group.Hotel_Group_ID
FROM hotel_group, phone_num_hg, email_addr_hg
WHERE hotel_group.Hotel_Group_ID = phone_num_hg.Hotel_Group_ID AND phone_num_hg.Hotel_Group_ID = email_addr_hg.Hotel_Group_ID
ORDER BY hotel_group.Hotel_Group_ID");

echo 'Hotel group Address, Phone and E-mail:
<br>
<select name="hotel_group" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotelgroup)) {
	echo '<option name="'.$row[Hotel_Group_ID].'"value="'.$row[Hotel_Group_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].", ".$row[Phone].", ".$row[Email].'</option>';
}
echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="insert" and $_POST["myobject"]=="employee") {
  echo '<form action="insert_employee.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br>
  IRS number:<br>
  <input type="int" name="irs" value="">
  <br>
  Social Security Number:<br>
  <input type="int" name="ssn" value="">
  <br>
  <br>
  Street:<br>
  <input type="text" name="street" value="">
  <br>
  Number:<br>
  <input type="int" name="street_number" value="">
  <br>
   Postal Code:<br>
  <input type="int" name="postal_code" value="">
  <br>
  City:<br>
  <input type="text" name="city" value="">
  <br>
  Start Date:<br>
  <input type="date" name="stdate" value="">
  <br>
  Finish Date:<br>
  <input type="date" name="fdate" value="">
  <br>
  Position:<br>
  <input type="text" name="position" value="">
  <br>';
  
  $hotel = $conn->query("SELECT Addr_Street, Addr_Number, Addr_Postal_Code, Addr_City, Hotel_ID
FROM hotel
ORDER BY hotel.Hotel_ID");


echo 'Hotel Address:
<select name="hotelnum" style="width:550px">; 
<option name="" value="">Select...</option>';

while ($row = mysqli_fetch_assoc($hotel)) {
	echo '<option name = "" value="'.$row[Hotel_ID].'">'.$row[Addr_Street]." ".$row[Addr_Number].", ".$row[Addr_Postal_Code].", ".$row[Addr_City].'</option>';
}

echo '
</select><br><br>
  
  <input type="submit" value="Submit">
  </form>';
}
if($_POST["myaction"]=="insert" and $_POST["myobject"]=="client") {
    echo '<form action="insert_client.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br>
  IRS number:<br>
  <input type="int" name="irs" value="">
  <br>
  Social Security Number:<br>
  <input type="int" name="ssn" value="">
  <br>
  <br>
  Street:<br>
  <input type="text" name="street" value="">
  <br>
  Number:<br>
  <input type="int" name="street_number" value="">
  <br>
   Postal Code:<br>
  <input type="int" name="postal_code" value="">
  <br>
  City:<br>
  <input type="text" name="city" value="">
  <br>
  <input type="submit" value="Submit">
  </form>';
}
?>
</body>
</html>
