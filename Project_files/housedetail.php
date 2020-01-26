<!DOCTYPE HTML>
<html>
<head>
<title>bookingDen-Details</title>
<meta charset="UTF-8">

<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

body{ margin: 0 auto; font-family: 'Old Standard TT';  }

/* Ensure proper sizing */
* {
  box-sizing: border-box;
}
/* Style the header */
.header{
width: auto;
height:300px;
margin-top: 0 auto;
text-align: center;
color: black; 
font-size: 40px;
background-image: url(header33.jpg);
}

#sitename{
  float: right;
}

.footer{
width: auto;
height:200px;
margin-top: 0 auto;
background-color: black;
}


/* Style the top navigation bar */
.navbar {
  overflow: hidden; /* Hide overflow */
  background-color: black; /* black background color */

}

/* Style the navigation bar links */
.navbar a {
  width:auto;
  float: left; /* Make sure that the links stay side-by-side */
  display: block; /* Change the display to block, for responsive reasons (see below) */
  color: white; /* white text color */
  text-align: center; /* Center the text */
  padding: 14px 20px; /* Add some padding */
  text-decoration: none; /* Remove underline */
  font-size:20px;
}

/* Change color on hover/mouse-over */
.navbar a:hover {
  background-color: #ddd; /* Grey background color */
  color: black; /* Black text color */
}

/* Column container */
.row { 
  display: flex;
  flex-wrap: wrap;
}


.side {
  flex: 100%; /* Set the width of the sidebar */
  background-color: black; /* black background color */
font-size: 20px;

text-align: center;

}

/* Responsive layout - when the screen is less than 500px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .row { 
    flex-direction: column;
  }


}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    width: 100%;
  }

}


#fieldset-up{
width:1000px;
top:10px;
position:80px 80px;
padding:10px;
background-color:black;
border:1px;
border-style: solid;
border-color: black;
text-align:center;
font-size:16px;
margin:auto;
color:white;
opacity: 0.9;
font-family:'Old Standard TT';
}

#search-button2{
width:100px;
  color: white;
  background-color: green;
  border: none;
  font-family: 'Old Standard TT';
  text-align: center;
  margin: 0 auto;
  padding: 10px;
  cursor: pointer;
}

.mySlides {
	display: none;
}

#slideshow{
  max-width: 1000px;
  position: relative;
  margin: auto;
 }
.prev,.next{
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: 50px;
  margin:auto;
  padding:15px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 5px;
  border-radius: 3px 0 0 3px;
}
.prev {
 left: 5px;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.numbertext {

  font-size: 20px;
  padding: 8px 12px;
  position: relative;
  top:100%;
  right: 50%;
  color: white;
}

.active {
  background-color: #717171;
}
.accordion {
  background-color: white;
  cursor: pointer;
  border:1px;
  border-color:black;
  padding: 18px;
  width: 100%;
  text-align: left;
  outline: none;
  font-size: 24px;
  transition: 0.4s;
  font-family:'Old Standard TT';
  
}

.active, .accordion:hover {
  background-color: lightgrey; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: black;
  overflow: hidden;
  font-size:20px;
  color:white;
}

</style>
</head>

<body>
	<?php $num = $_GET['id'];
		$_SESSION['ids']=$num;
		?>
  <nav class="navbar">
   <a href="#" id="sitename"><i class="fa fa-bed w3-margin-right"></i>&nbspBookingden.com</a>
    <a href="index.php"  >Home</a>
    <a href="index.php#about" >About</a>
    <a href="index.php#contactus">Contact Us</a>

   </nav>

  <header class="header"> </header>
  
  <div class="row">
<div class="side">

<div id="front-form" >
<form id="firstform" action="" method="post">
<fieldset id="fieldset-up">
<label>  Area: </label><select name="area" required>
<option> </option>
<option>Clifton</option>
<option>Defence</option>
<option>Askari</option>
</select>
<label> Check-In:</label><input type="date" name="checkin_date" required/>
<label> Check-Out: </label><input type="date" name="checkout_date" required/>
<label> Number of Guests:</label><input type="number" name="guests" min="1" max="20" required/>
<button id="search-button2" type="submit">Search</button>
</fieldset>
</form>


</div>

<div id="slideshow" >
<?php

include 'image.php';
?>

</div>
<div id="detail" style="font-size:30px;border:1px;">
<h2 style="background-color:black; font-family: 'Old Standard TT'; text-align: left ;color:white; sans-serif;margin:0 auto;">GuestHouse Details:</h2>
<button class="accordion"><strong>Rooms</strong></button>
	
	<div class="panel" >
	<?php
	
include 'roomdetail.php';
?>

</div>

<button class="accordion"><strong>Policies</strong></button>
	
	<div class="panel">
	<?php

	include 'policiesdetail.php';
?>
	</div>
<button class="accordion"><strong>Facilities</strong></button>
	
	<div class="panel"  >
	<?php

	include 'facilities.php';
?>
	</div>


 <div style="text-align:center;">
 <form method="post" action="registrationform.php?id=<?php echo $num;?>">
</br>
 <button  style="vertical-align:float-left;width:100px;height:50px; color:white; border:1px solid; border-color: white; cursor: pointer;background-color:green; font-size:20px; font-family:'Old Standard TT', sans serif;">Reserve</button>
 </form>
  </br> 
 </div>

 </div>
 </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


 </div> <!-- div row ends here -->
</body>

</html>


