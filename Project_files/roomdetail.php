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

   $sql = "SELECT totalRooms, totalBedroom, livingRoom, kitchen, bedroomWithBath FROM RoomDetails WHERE guesthouseid = $guesthouseid";
   $result = $conn->query($sql);
  
   if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
  }
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())  {
	
       echo  "Total Rooms :{$row['totalRooms']}<br>". 
                "Bedroom	:{$row['totalBedroom']}<br>" .
				"Living Room	: {$row['livingRoom']} <br>".
                "Kitchen	: {$row['kitchen']}<br>". 
		        "Bedroom With Bathroom	:{$row['bedroomWithBath']}<br>";
        
        
		}
}
	$conn->close();
   ?>