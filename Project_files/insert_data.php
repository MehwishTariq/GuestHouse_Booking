<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guesthouse";

$conn =  new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $guesthouseid=$_GET['id'];
 
 
$username1= $_POST['yourname'];
$usercnic= $_POST['yourcnic'];
$usercontact= $_POST['contactnum'];
$useremail= $_POST['mail'];

$sql = "INSERT INTO user (name, cnic, contact, email)
VALUES ('$username1', '$usercnic', '$usercontact', '$useremail')";

$result= $conn->query($sql);

$sql= "SELECT userId FROM user ORDER BY userId DESC LIMIT 1";
$result= $conn->query($sql);
$row = $result->fetch_assoc();
$id=$row['userId'];

$totalguests= $_POST['numofguests'];
$adults= $_POST['adults'];
$children= $_POST['children'];
$guestname= $_POST['guestname'];
$guestcontact= $_POST['guestcontact'];
$guestemail= $_POST['guestmail'];

$sql = "INSERT INTO guestdetails (userId,noOfGuests, adults, children, guestName, guestContact, guestEmail)
VALUES ($id,$totalguests,$adults, $children, '$guestname', $guestcontact,'$guestemail')";

$result= $conn->query($sql);

$pm= $_POST['pm'];
$checkinDate=$_SESSION['indate'];
$checkoutDate=$_SESSION['outdate'];

$sql= "INSERT INTO reservation(guesthouseId, checkinDate,checkoutDate, userId, paymentmethod)
VALUES ($guesthouseid,'$checkinDate' , '$checkoutDate' ,$id, '$pm')";

$result= $conn->query($sql);

$conn->close();
include 'book.php';
?>
