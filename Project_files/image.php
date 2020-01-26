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

   $sql = "SELECT imageUrl FROM Images WHERE guesthouseid = '$guesthouseid'";
   $result = $conn->query($sql);
   
    if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
  }
if ($result->num_rows > 0) {
    // output data of each row
	$no=$result->num_rows;
	$i=1;
    while($row = $result->fetch_assoc())  {
		
		echo '<html>';
		//echo '<link rel="stylesheet" href="style.css">';
		echo '<div id="slideshow" >';
		
      echo	  '<div class="mySlides">';
 echo '<div class="numbertext" style="top:670px;position:absolute;">'.$i.'/'.$no.'</div>';
     echo '<img src= "'.$row['imageUrl'].'" style="width:100%;height:95%;padding:50px;">';
	 
 echo '</div>';

echo '</div>';
 echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>';
echo  '<a class="next" onclick="plusSlides(1)">&#10095;</a>';
echo '</html>'; 
$i++;
	
	}
}
	$conn->close();
?>