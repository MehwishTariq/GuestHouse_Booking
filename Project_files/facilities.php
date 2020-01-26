<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "guesthouse";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$guesthouseid=$_SESSION['ids'];

   $sql = "SELECT security,airconditioning,garden,terrace,swimmingPool FROM Facilities WHERE guesthouseid = $guesthouseid";
   $result = $conn->query($sql);
   
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
  }
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())  {
	
    	if($row['security']==1){
			echo	"Security	: Available <br>";
			}
			else{
				echo	"Security	: Not Available <br>";
			}
			if($row['airconditioning']==1){
				echo	"A/C	: Available <br>";
			}
			else{
				echo	"A/C	: Not Available <br>";
			}
			if($row['garden']==1){
			echo	"Garden	: Available <br>";
			}
			else{
				echo	"Garden	: Not Available <br>";
			}
			if($row['terrace']==1){
			echo	"Terrace	: Available <br>";
			}
			else{
				echo	"Terrace	: Not Available <br>";
			}
			if($row['swimmingPool']==1){
			echo	"SwimmingPool	: Available <br>";
			}
			else{
				echo	"SwimmingPool	: Not Available <br>";
			}
		   
        }
}
  $conn->close();
	?>