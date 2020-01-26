<!DOCTYPE HTML>
<html>
<head>
<title>bookingDen-Ads</title>
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
color: white;
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


</style>
</head>

<body>
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
<option> Clifton</option>
<option>Defence</option>
<option> Askari</option>
</select>
<label> Check-In:</label><input type="date" name="checkin_date" required/>
<label> Check-Out:</label><input type="date" name="checkout_date" required/>
<label> Number of Guests:</label><input type="number" name="guests" min="1" max="20" required/>
<button id="search-button2" type="submit" style="font-family:'Old Standard TT'; ">Search</button>
</fieldset>
</form>

<?php include 'check.php';?>
</div>

  </div>
  </div> <!-- div row ends here -->


</body>
</html>