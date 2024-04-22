<?php
session_start();
$username=$_SESSION["uname"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#menu").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style>
	  .mossgalimg{
      background-image: url(https://i.pinimg.com/originals/4c/5b/b5/4c5bb59ca61719f4750528954fd0280f.jpg);
    background-size: cover; /* You can adjust this property to control how the image is displayed */
    width: 1500px; /* Set the width of your div */
    height: 700px;
    text-align: left; /* Align text to the left */
    display: flex; /* Center text horizontally */
    align-items: center; /* Set the height of your div */
  }
  .menu {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 10px;
    color: #f0f0f0;
  }
  .bar {
  width: 30px;
  height: 3px;
  background-color: white;
  margin: 6px 0;
  transition: 0.4s;
}
.admin{
    position: absolute;
    top: 15px;
    right: 60px;
    padding: 10px;
    color: #f0f0f0;
  }
  .log{
    position: absolute;
    top: 15px;
    right: 60px;
    padding: 10px;
    color: #f0f0f0;
  }
  #panel {
  padding: 5px;
  text-align: center;
  background-color:black;
  border: solid 1px #c3c3c3;
    padding: 50px;
  display: none;
  width: 1500px; /* Set the width of your div */
    height: 700px;
}
hr {
  background-color: #fff; /* Background color for white line */
  height: 0.1px; /* Height of the line, adjust as needed */
  width: 30%; /* Width of the line, adjust as needed */
  margin: 0 auto; /* Center the line horizontally on the page */
}
a{
	font-family: Garamond, serif; color: white;
}
footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px;
}

/* Optionally, you can style other elements like links in the footer */
footer a {
    color: white;
    text-decoration: none;
}
</style>
</head>
<body>
<div class="container-fluid border">
<div id="panel" style="font-family: Garamond, serif; color: white;">
	<br><br><br><br><a href="trialhome1.html">HOME</a><br><br><hr><br>
	<a href="aboutus.html">ABOUT US </a><br><br><hr><br>
	<a href="artworks.php">ARTWORKS</a> <br><br><hr><br>
	<a href="#">CONTACT US</a><br><br><hr><br><br><br><br>
</div>
<div class="mossgalimg">
	<div class="menu" id="menu">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    </div>
    <div class="log" style="font-family: Garamond, serif;">
		<a href="log"><?php echo $username;?></a>
	</div> 
	<h1 style="font-family: 'Snell Roundhand', cursive; color: white; font-size: 100px; font-style: italic;">
		&nbsp;MOSS<br>&nbsp;Galleries</h1>
</div></div><br><br>
<div class="container pt-3">
<h2 style="font-family: Garamond, serif;">CURRENT EXHIBITS</h2><br>
<div class="row">        
<div class="col-lg-4"> 
	<img src="https://d3rf6j5nx5r04a.cloudfront.net/aXhC6toPXPwl8_Z5gFSYRAXya68=/500x0/product/b/e/9eb5d61ba55c4e6899c9d312246f5dc5_opt.jpg" style=" height: 300px; width: 300px;"><br>
	<p style="font-family: Garamond, serif;"><br>COUNTER BALANCE <br> SEPTEMBER 8TH TO OCTOBER 28TH<br> MAINE</p>
</div>
<div class="col-lg-4">
<img src="data:image/jpeg;base64,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" style=" height: 300px; width: 300px;"><br>
	<p style="font-family: Garamond, serif;"><br>GRASSY PLAINS <br> JANUARY 11TH TO FEBRUARY 28TH<br> PORTLAND</p>	
	
</div>
<div class="col-lg-4">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToOMmsEUbSiX3Ki5OlrYd2fdS9LNlfQVgGXQ&usqp=CAU" style=" height: 300px; width: 300px;"><br>
	<p style="font-family: Garamond, serif;"><br>AUTUMN <br> AUGUST 13TH TO OCTOBER 13TH<br> MAINE</p>	
</div>
</div>
<br><br>
<div class="row">
	<div class="col-lg-6"><img src="https://i.pinimg.com/originals/99/96/e1/9996e16486f190c0083d0105eb3a897a.jpg" style="height:400px; width:550px;">
	</div>
<div class="col-lg-6" style="font-family: Garamond, serif;"><br><br><h4>WORKS OF ABSTRACT EXPRESSIONIST ARTIST LYNNE MAPP DREXLER AT MOSS GALLERIES</h4><br>
1928 - 1999<br>
Lynne Drexler artwork at Moss Galleries in Portland and Falmouth Maine.
Lynne was an world renowned Abstract Expressionist artist, that has many works represented here at Moss Galleries.</div>
</div><br><br><br><br><br>
<h3 style="font-family: Garamond, serif;">CONTACT US:</h3>
<div class="row" style="font-family: Garamond, serif;">
<div class="col-lg-6">
Elizabeth Moss Galleries, 251 Route One, Falmouth, ME , 207-781-2620 <br>
100 Fore Street, Suite B, Portland, ME,   207-804-0459 <br>
liz@elizabethmossgalleries.com
</div>
<div class="col-lg-6">
Hours for Falmouth, Maine Location:<br>                                                              
Tuesday - Thursday: 10:00 am - 5:00 pm<br>
Friday - Saturday: 10:00 am - 5:00 pm <br>
Off Hours Visits available by Appointment<br>
Hours for Portland, Maine Location: <br>     
Tuesday - Thursday: 10:00 am - 5:00 pm <br>
Friday - Saturday: 10:00 am - 5:00 pm <br>
Sunday - By Appointment or Chance<br>
</div>
</div>
<br>
<br>
<br>
</div>
<footer>
<div class="row" style="font-family: Garamond, serif;">
<div class="col-lg-6">
<h4>Quick links</h4>
<a href="home.php">Home</a><br>
<a href="artworks.php">Artworks</a><br>
<a href="aboutus.html">About us</a><br>
<a href="contactus.php">Contact us</a><br>
</div>
<div class="col-lg-6">
<h4>Social networks</h4>
<a href="#">Facebook</a><br>
<a href="#">Instagram</a><br>
<a href="#">Twitter</a><br>
</div>
</div>
    </footer>
</body>
</html>