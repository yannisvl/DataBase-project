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


$irs = $_POST['irs'];
$presql = "SELECT * FROM customer WHERE IRS_Num=$irs";

if ($conn->query($presql) === FALSE){
	echo 'no IRS number inserted. 
	Press try again to retry or home to return to home page';
}
else {
if (mysqli_num_rows($conn->query($presql)) == 1){
	echo "Successfull insertion of the customer's IRS number";
	
	$sql = $conn->query("SELECT First_Name, Last_Name, IRS_Num, Social_Sec_Num FROM customer WHERE IRS_Num = $irs");
	 echo '<form action="delete_customer1.php" method="post">
  
<br>
<br>
First Name , Last Name , IRS number, Social Security Number:
<br>
<br> ';

while ($row = mysqli_fetch_assoc($sql)) {
	echo $row['First_Name']." ".$row['Last_Name'].", ".$row['IRS_Num'].", ".$row['Social_Sec_Num'];
}
	
  echo '
  <br><br>
  <input type="hidden" name = "irs" value = "'.$irs.'">
  Click Proceed to complete the deletion of the customer<br><br>
  <input type="submit" value="Submit">
  </form>';
}
else{ 
	echo 'no customer with this IRS number found. Press try again to reeenter data';
}
}
?>
<br><br>
<form1>
	<input type="button" value="try again!" onclick="history.back()">
	</form1>
	
	<ul>
    <li><a href="mybase.php">Home Page</a></li>
    </ul>
</body>
</html>