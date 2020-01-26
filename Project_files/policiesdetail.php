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

   $sql = "SELECT checkinHrs,checkoutHrs,nic,pet,paymentMethod,advance FROM Policies WHERE guesthouseid = $guesthouseid";
   $result = $conn->query($sql);
   
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
  }
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())  {
	
       echo  "Check_In Hours :{$row['checkinHrs']}<br>". 
                "Check_Out Hours	:{$row['checkoutHrs']}<br>";
				
				if($row['nic']==true){
			echo	"NIC	: Required <br>";
				}
			else{
				echo	"NIC	: Not Required <br>";
			}
			if($row['pet']==true){
			echo	"Pet	: Allowed <br>";
			}
			else{
				echo	"Pet	: Not Allowed <br>";
			}
		    echo  "Payment Method	:{$row['paymentMethod']}<br>".
				"Advance	:{$row['advance']}<br>";
        }
}
  $conn->close();
	?>