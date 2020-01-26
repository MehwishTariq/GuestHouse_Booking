<?php


$servername = "localhost";
$username = "root";
$password = '';
$dbname = "guesthouse";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	 $gstid=$_SESSION['id'];
	
$i=0;
        foreach ($gstid as $datas)
   {
     $sql="SELECT * from guesthouse where guesthouseId IN (".implode(",",(array)$datas).")";
	 $sql2="SELECT imageUrl from images where guesthouseId IN (".implode(",",(array)$datas).") order by guesthouseId desc limit 1";
		 $top=$i*50;
	$result=$conn->query($sql) or die($conn->error);
	 $result2=$conn->query($sql2) or die($conn->error);
if ($result->num_rows > 0) {
	
	$row = $result->fetch_array();
	$name=$row['name'];
	$address=$row['street']." - ".$row['area'].",".$row['city'];
	$rent=$row['rent'];
	$id=$row['guesthouseId'];
}
if($result2->num_rows>0)
{
	$row=$result2->fetch_array();
	$image=$row['imageUrl'];
	
}
   echo "<br><br>";
   echo '<html>';
   echo '<body>';
   echo '<script type="text/javascript">
function getids(i){
	   
		 window.open("housedetail.php?id="+i);
    }	

</script>';
  echo '<form name="detail" method="get">';
echo '<div id="container1" style="background-color:white; color:black; width:800px; margin:auto; top: '.$top.'%">';
echo ' <img src="'.$image.'" alt="guesthouseimg" style="width:350px; height:300px;padding:5px;">';
echo '<div id="content1" style="background-color:white; width:400px; height:250px; text-align:left; float:right;padding:10px; font-size:20px; color:black; ">';
echo '<p id="guesthousename" font-size:"20px;"><b><i><u> '.$name.'</b></i></u> </p>';

echo '<label for="add"><b> Address:</b></label>';
echo '<p id="add">'.$address.'</p>';

echo '<label for="rent"><b>Rent:</b></label>';
echo '<p id="rent">'.$rent.'</p>';
echo '<button onclick="getids('.$id.');" id="search-button" style="width:100px; color: white; background-color: green; border: none; text-align: center; margin: 0 auto;padding: 10px; cursor: pointer;"">Details</button>';
echo '</div>';
echo '</div>';
echo '</form>';
   echo '</body>';
	 echo '</html>';
   $i++;	

}
	
$conn->close();
?>

