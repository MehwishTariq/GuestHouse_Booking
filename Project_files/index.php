<!DOCTYPE HTML>
<html>
<head>
<title>bookingDen-HOME</title>
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
height:600px;
margin-top: 0 auto;
text-align: center;
color: black; 
font-size: 40px;
background-image: url(wallpaper.png);
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


#fieldset-home{
width:300px;
height:410px;
background-color:black;
border: none;
margin: 0 auto;
position:relative;
padding:40px;
font-size:20px;
color:white;
opacity: 0.8;
}

#search-button{
  color: white;
  background-color: green;
  border: none;
  width: 80px;
  height: 40px;
  font-family: 'Old Standard TT';
  text-align: center;
  margin: 0 auto;
  padding: 10px;
  cursor: pointer;

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

/* Four image containers (use 25% for four, and 50% for two, etc) */
.column1 {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clear floats after image containers */
.row1::after {
  content: "";
  clear: both;
  display: table;
} 
.row1 {
  display: flex;
  background-color: black;
}

.column1 {
  flex: 25%;
  padding: 5px;
} 

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column1 {
    width: 100%;
  }
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

</style>
</head>
<body>
	<nav class="navbar">
   <a href="#" id="sitename"><i class="fa fa-bed w3-margin-right"></i>&nbspBookingden.com</a>
		<a href="index.php"  >Home</a>
		<a href="#about">About</a>
		<a href="#contactus">Contact Us</a>

   </nav>
	<header class="header">
</br>Find your dream guesthouse!</br></br> 

<form id="firstform" action="search.php" method="post">
<fieldset id="fieldset-home">
<label> Area: </label><select width="500" name="area" required>
<option></option>
<option>Clifton</option>
<option>Defence</option>
<option>Askari</option>
</select></br></br>
<label>Check-In:</label><input type="date" name="checkin_date" required></br></br>
<label>Check-Out: </label><input type="date" name="checkout_date" required/></br></br>
<label>Number of Guests: </label><input type="number"  name="guests" min="1" max="20" required/></br></br>
<button id="search-button" type="submit" >SEARCH</button>
</fieldset>
</form>

</header>

<div class="row">

<div class="side">
	<h2 id="about" align="center">ABOUT US</br></h2>
<p align="center" font-spacing="2px" >
Booking a guesthouse had never been a hassle-free task.
Having to drive to the guesthouse itself or calling their management 
to investigate about its availibility and facilities is what we all had to go through 
until bookingden.com came into being.</br></br>
Founded in June 2019 by a pair of college sophomores, bookingden.com has introduced online guesthouse booking facility in Pakistan. It is a user-friendly website where you can browse for available guesthouses, their facilities & policies, and
reserve them before hand.
</br></br>
Our Vision:</br>To ensure transparent, easy and efficient e-booking system of guest houses in Pakistan. </p>
</div>


<div class="row1">
  <div class="column1">
    <img src="photo1.jfif"  style="width:100%">
  </div>
  <div class="column1">
    <img src="photo3.jfif" style="width:100%">
  </div>
  <div class="column1">
    <img src="photo4.jfif" style="width:100%">
  </div>
    <div class="column1">
    <img src="photo2.jfif"  style="width:100%">
  </div>
</div> 


<div class="side">
<h2 id="contactus" align="center">CONTACT US</br></h2> 

If you have any questions, do not hesitate to ask them.</br></br>
 Bookingden</br>
 Karachi, Pakistan</br>
 Phone: +9213-0000000</br>
 Email: bookingden@mail.com
</br></br>
<i class="fa fa-facebook-official "></i>
 <i class="fa fa-instagram "></i>
<i class="fa fa-snapchat "></i>
 <i class="fa fa-twitter "></i>
 <i class="fa fa-linkedin "></i>
</div>

</div> <!-- div row ends here -->

</body>
</html>