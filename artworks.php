<?php
session_start();
$conn = mysqli_connect('localhost','root','','art');
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
  
  $("#search").click(function(){
    $("#art").show();
  })

});
</script>
<style>
	  .mossgalimg{
    background-image: url(https://wallpapers.com/images/hd/oil-painting-0t48bk1arbgvcl7h.jpg);
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
	font-family: Garamond, serif; color: white;"
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: white; /* Set the background to black */
    color: black; 
    font-family: Garamond, serif;/* Set the text color to white */
}
input {
    padding: 5px;
    width: 300px;
    border: 1px solid black; /* Set border color to white */
    border-radius: 20px;
    background: white; /* Set input background to black */
    color: black;
    height:50px;/* Set input text color to white */
}
button {
    color: white; /* Button text color */
    border: none;
    width: 150px;
    border-radius: 20px;
    cursor: pointer;
    padding: 10px;
    background:black;
}

.card {
    border: none;
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
	<br><br><br><br><a href="home.php">HOME</a><br><br><hr><br>
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

	<h1 style="font-family: 'Snell Roundhand', cursive; color: white; font-size: 100px; font-style: italic;">
		&nbsp;MOSS<br>&nbsp;Galleries</h1>
		<center style="font-family: Garamond, serif; color: white; position: absolute;bottom: 50px;left:600px; font-size: 50px;">ARTWORKS</center>
</div></div><br><br>
<div class="container pt-3">
<br>
<div class="row">
<div class="col-lg-12" style="font-family: Garamond, serif;"><br><br><h3>LOOK OUT FOR OUR BEST.</h3>
	<br>
	<p style="font-family: Garamond, serif; font-size: 20px;"> 
  <center>
    <form method="POST" action="#" enctype="multipart/form-data">
    <input type="text" name="genre" placeholder="Search by genre">
    <button type="submit" value="search" name="search" id="search">SEARCH</buton>
 </form>
  </center>
</p><br>
<br>
</div>
</div>
</div>


     <div class="container" id="art">
     <div class="card-columns">
     <?php
     if(isset($_POST['search'])){
      $genre = $_POST['genre'];
      $select = mysqli_query($conn,"SELECT * FROM arts where genre='".$genre."'");
    while($row = mysqli_fetch_assoc($select)){
         ?>
    <div class="card">
      <div class="card-body text-center">
        <div class="card-text">
          <img src="img/<?php echo $row['pic']; ?>" height="300" width="300"  alt=""><br>
        <?php echo $row['aname']; ?><br>
        By <?php echo $row['artist']; ?><br>
        <?php echo $row['genre']; ?><br>
        <?php echo $row['asize']; ?><br>
        <a href="inquire.php?art=<?php echo $row['aname'];?>"><button>INQUIRE</button></a>
      </div>
    </div>
    </div>
    <?php } }?>
    </div>
    </div>
<br>
<br><br><br>
<div class="container">
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
</center>
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