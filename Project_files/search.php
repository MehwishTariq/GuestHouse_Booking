<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guesthouse";
$gstid=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$_SESSION['id']=array();
	
	$area= isset($_POST['area']) ? $_POST['area'] : '';
	$checkin= isset($_POST['checkin_date']) ? $_POST['checkin_date'] : '';
	$checkout= isset($_POST['checkout_date']) ? $_POST['checkout_date'] : '';

	$_SESSION['indate']=$checkin;
	$_SESSION['outdate']=$checkout;
		
	$query="SELECT checkinDate from Reservation where checkinDate='$checkin'";
	$result2 = $conn->query($query);
	if ($result2->num_rows!=0)
	{
		$sql = "SELECT guesthouseId from guesthouse where guesthouseId!=
	(SELECT r.guesthouseId FROM Reservation as r, guesthouse as g where r.guesthouseId=g.guesthouseId AND r.checkinDate='$checkin')
	AND area='$area'";
	}
	else{
   	$sql = "SELECT guesthouseId from guesthouse where guesthouseId!=
	(SELECT r.guesthouseId FROM Reservation as r, guesthouse as g where r.guesthouseId=g.guesthouseId AND r.checkinDate='$checkin')
	OR area='$area'";
	}
	$result = $conn->query($sql) or die($conn->error);
	if ($result->num_rows > 0) {
		
    // output data of each row
	while($row = $result->fetch_assoc())  {
	array_push($_SESSION['id'],$row['guesthouseId']);
	 
		}
		
	}
		$conn->close();

include 'ads.php';
 ?>