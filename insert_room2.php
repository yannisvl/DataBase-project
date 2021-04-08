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


$hg2 = $_POST['hg1'];
$tv2 = $_POST['tv1'];
$ac2 = $_POST['ac1'];
$sp2 = $_POST['sp1'];
$wf2 = $_POST['wf1'];
$mw2 = $_POST['mw1'];
$bf2 = $_POST['bf1'];



$rn2 = $_POST['rn1'];
$vi2 = $_POST['vi1'];
$exp2 = $_POST['exp1'];
$myhot2 = $_POST['myhot1'];
$price2 = $_POST['price1'];
$cap2 = $_POST['cap1'];

if ($rn2 == 1){
	$rninfo1 = $_POST['rninfo'];
}
else {$rninfo1 = "";}

if ($exp2 == 1){
	$expinfo1 = $_POST['expinfo'];
}
else {$expinfo1 = "";}

if ($vi2 == 1){
	$viinfo1 = $_POST['viinfo'];
}
else {$viinfo1 = "";}

$result = "SELECT * FROM hotel_room";
$myid = mysqli_num_rows($conn->query($result));
$myid++;

$sql = "INSERT INTO hotel_room (Price, Room_ID, Repairs_Need, Expandable, Vyu, Capacity, Hotel_ID, Repairs_Need_Info, Expandable_Info, Vyu_Info, TV, Air_Condition, Swimming_Pool, Wifi, Microwave_Oven, Breakfast) VALUES($price2, $myid, $rn2, $exp2, $vi2, $cap2, $myhot2, '$rninfo1', '$expinfo1', '$viinfo1', $tv2, $ac2, $sp2, $wf2, $mw2, $bf2)";
#print($sql = "INSERT INTO hotel_room (Price, Room_ID, Repairs_Need, Expandable, Vyu, Capacity, Hotel_ID, Repairs_Need_Info, Expandable_Info, Vyu_Info, TV, Air_Condition, Swimming_Pool, Wifi, Microwave_Oven, Breakfast) VALUES($price2, $myid, $rn2, $exp2, $vi2, $cap2, $myhot2, '$rninfo1', '$expinfo1', '$viinfo1', $tv2, $ac2, $sp2, $wf2, $mw2, $bf2)");

if ($conn->query($sql) === TRUE ) {
    echo "New record created successfully. Press Home to return to home page";
	$addone = "UPDATE hotel SET Rooms_Num = Rooms_Num + 1 WHERE Hotel_ID = $myhot2" ;
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