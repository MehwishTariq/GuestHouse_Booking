<!DOCTYPE HTML>
<html>
<head>
<title>bookingDen-BOOKED</title>
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

#message{
width:600px;
height:300px;
background-color:black;
border: none;
margin: 0 auto;
position:relative;
padding:30px;
font-size:20px;
color:white;
opacity: 0.8;
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

  <header class="header">
  </br></br></br>
    <div id="message"><p></br></br>
<b>Thank You for using our website to Book!<b></br></br>
Your booking has been acknowledged and the details will be transfered to the guesthouse owner.<br>
They will soon be contacting you.
</p>
</header>
</body>
</html>