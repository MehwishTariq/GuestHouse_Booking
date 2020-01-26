<!DOCTYPE HTML>
<html>
<head>
<title>bookingDen-REGISTER</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="registration.css">
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

<?php 
 $num=$_GET['id']; ?>
 <div class="side">
<form method="post" action="insert_data.php?id=<?php echo $num;?>">

  <div class="container">
    <h2>REGISTER</h2>
    <p>Please fill in this form to book your chosen guesthouse.</p>
  
<legend><span class="num">1</span><b> Personal Details:</b></legend></br>

<label for="yourname"><b>Name:</b></label></br>
    <input type="text" placeholder="Name*" pattern="[a-zA-Z ]*$" name="yourname" value=""required>

</br>
<label for="mail"><b>Email:</b></label></br>
    <input type="email" placeholder="name@domain.xyz *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="mail" value=""required>
</br>

<label for="contact"><b>Contact Number:<b></label><br/>
  <input type="text" name="contactnum" placeholder="Your 11-digit number*" pattern="[0-9]{11}" value="" required>
</br>

<label for="cnic"><b>CNIC:</b></label></br>
    <input type="text" placeholder="Format: xxxxx-xxxxxxx-x *" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" name="yourcnic" value=""required>
</br> 
</br><legend><span class="num">2</span><b> Guest Details:</b></legend></br>
<label for="numofguests"><b>Total Guests:</b></label></br>
    <input type="number" placeholder="Total Guests (including you)" name="numofguests" min="1" value="" required>   
</br> 
<label for="adults"><b>Number of Adults:</b></label></br>
    <input type="number" placeholder="Number of Adults (including you)" name="adults" min="1" value="" required> 
</br>
<label for="children"><b>Number of Children:</b></label></br>
    <input type="number" placeholder="Number of Children" name="children" min="0" value="" required> 
</br>

<label for="guestname"><b>Guest's Name:</b></label></br>
    <input type="text" placeholder="Guest's name*" name="guestname"  pattern="[a-zA-Z ]*$" value=""required>

</br>
<label for="guestmail"><b>Guest's Email:</b></label></br>
    <input type="email" placeholder="name@domain.xyz *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="guestmail" value=""required>
</br>

<label for="guestcontact"><b>Guest's Contact Number:<b></label><br/>
  <input type="text" name="guestcontact" placeholder="Your 11-digit number*" pattern="[0-9]{11}" value="" required>
</br>
 </br><legend><span class="num">3</span><b> Payment Details:</b></legend> </br>
<label for="pm"><b>Your payment method:</b></label></br>
<input list="paymentmethod" name="pm"  required>
  <datalist id="paymentmethod">
    <option value="Credit/Debit">
    <option value="Cash">
  </datalist>

<input type="submit" class="register" value="Register" style="font-family:'Old Standard TT'; ">
<input type="reset" class="register" style="font-family:'Old Standard TT'; ">

</div>  
</form>

</div>

  </div> <!-- div row ends here -->


</body>
</html>