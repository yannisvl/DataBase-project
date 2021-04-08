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


$hg1 = $_POST['hg'];
$price1 = $_POST['price'];
$cap1 = $_POST['cap'];
$myhot1 = $_POST['myhot'];

if (isset($_POST['tv'])){
	$tv1 = 1;
}
else {$tv1 = 0;}

if (isset($_POST['ac'])){
	$ac1 = 1;
}
else {$ac1 = 0;}

if (isset($_POST['sp'])){
	$sp1 = 1;
}
else {$sp1 = 0;}

if (isset($_POST['wf'])){
	$wf1 = 1;
}
else {$wf1 = 0;}

if (isset($_POST['mw'])){
	$mw1 = 1;
}
else {$mw1 = 0;}

if (isset($_POST['bf'])){
	$bf1 = 1;
}
else {$bf1 = 0;}
	?>

<form action="insert_room2.php" method="post">
<input type="hidden" name = "hg1" value = "<?php echo "$hg1";?>">
<input type="hidden" name = "myhot1" value = "<?php echo "$myhot1";?>">
<input type="hidden" name = "cap1" value = "<?php echo "$cap1";?>">
<input type="hidden" name = "price1" value = "<?php echo "$price1";?>">

<input type="hidden" name = "tv1" value = "<?php echo "$tv1";?>">
<input type="hidden" name = "ac1" value = "<?php echo "$ac1";?>">
<input type="hidden" name = "sp1" value = "<?php echo "$sp1";?>">
<input type="hidden" name = "bf1" value = "<?php echo "$bf1";?>">
<input type="hidden" name = "wf1" value = "<?php echo "$wf1";?>">
<input type="hidden" name = "mw1" value = "<?php echo "$mw1";?>">
<?php 
	$var = 0;
	if (isset($_POST['rn'])){
		$var = 1;
		echo 'Repairs Need Info Details:<br>
  <input type="text" name="rninfo" value="">
  <br>';
		$rn1 = 1;
	}
	else {$rn1 = 0;}
	if (isset($_POST['exp'])){
		$var = 1;
		echo 'Expandable info:<br>
  <input type="text" name="expinfo" value="">
  <br>';
		$exp1 = 1;
	}
	else{$exp1 = 0;}
	if (isset( $_POST['vi'])){
		$var =1;
		echo 'View info:<br>
  <input type="text" name="viinfo" value="">
  <br>';
		$vi1 = 1;
	}
	else {$vi1 = 0;}
	if ($var == 0){
		echo 'no repairs need , expandable or view options';
	}
?>
<input type="hidden" name = "rn1" value = "<?php echo "$rn1";?>">
<input type="hidden" name = "exp1" value = "<?php echo "$exp1";?>">
<input type="hidden" name = "vi1" value = "<?php echo "$vi1";?>">
	<br>
  <input type="submit" value="Submit">
  </form>

</body>
</html>