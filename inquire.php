<?php
session_start();
$conn = mysqli_connect('localhost','root','','art');
?>
<?php
if (isset($_GET['art'])){
    $name=$_GET['art'];
    $select=mysqli_query($conn,"SELECT * FROM arts where aname= '".$name."'");
}
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
    background-image: url(https://e1.pxfuel.com/desktop-wallpaper/885/898/desktop-wallpaper-famous-oil-painting-artist-famous-paintings-paintings.jpg);
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
.input {
    padding: 10px;
    width: 500px;
    border: 1px solid black; /* Set border color to white */
    border-radius: 20px;
    background: white; /* Set input background to black */
    color: black; /* Set input text color to white */
}
.button {
    color: white; /* Button text color */
    border: none;
    width: 200px;
    border-radius: 20px;
    cursor: pointer;
    padding: 10px;
    background: black;
    text-align: center;

}
a{
	font-family: Garamond, serif; color: white;
}
#add {
            width: 500px; /* Set the width of the input field */
            height: 100px; /* Set the height of the input field */
            font-size: 16px; /* Set the font size of the text inside the input field */
            padding: 10px; /* Add some padding to the input field for spacing */
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
		<center style="font-family: Garamond, serif; color: white; position: absolute;bottom: 50px;left:600px; font-size: 50px;">THANK YOU</center>
</div></div><br><br>
<br>
<div class="container" style="text-align:center;">
    <div class="row">
        <div class="col-lg-4">
        <?php
 while($row = mysqli_fetch_assoc($select)){
     ?>
        <img src="img/<?php echo $row['pic']; ?>" height="400" width="400" alt=""><br>
        <?php echo $row['aname']; ?><br>
        By <?php echo $row['artist']; ?><br>
        <?php echo $row['genre']; ?><br>
        <?php echo $row['asize']; ?><br>
        <br>    
<?php
 }
 ?>
</div>
<div class="col-lg-8">
<div class="details">
	<center><h1 style="font-family: Garamond, serif;">CUSTOMER DETAILS</h1></center>
	<form name="f1" method="POST">
		<p style="font-family: Garamond, serif;">CONTACT NO:</p> <input type="text" name="contact" class="input" placeholder="Enter contact no." required><br><br>
		<p style="font-family: Garamond, serif;">COUNTRY OF RESIDENCE:</p> <input type="text" name="country" class="input" placeholder="Enter country" required><br><br>
		<p style="font-family: Garamond, serif;">RESIDENCE ADDRESS:</p> <input type="text" name="address" class="input" id="add" placeholder="Enter address" required><br><br>
		<p style="font-family: Garamond, serif;">POSTAL CODE:</p> <input type="password" name="postal" class="input" placeholder="Enter postal code" required><br><br>
		<center><button type="submit" class="button" name="details"><p style="font-family: Garamond, serif;">SUBMIT</p></button><br>
  <h3 id="oh" style="font-family: Garamond, serif;"></h3></center>
	</form><br><br>
	</center>
</div>
</div>
</div>
<div class="container">
<div class="row" style="font-family: Garamond, serif;">
<div class="col-lg-6">
<h3 style="font-family: Garamond, serif;">CONTACT US:</h3>
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
<?php
if(isset($_POST['details'])){
  $contact = $_POST['contact'];
  $country = $_POST['country'];
  $address = $_POST['address'];
  $postal= $_POST['postal'];
  if($contact !="" && $country  !="" && $address !="" && $postal!=""){
    $sql="insert into details values('$contact', '$country ', '$address', '$postal')";
    if($conn->query($sql)){
      ?>
      <script>
        document.getElementById("oh").innerHTML="Thank you for your interest, you will be contacted by us shortly.";
        </script>
      <?php
    }
    else{
        echo "unsuccessful";
    }
}
}
?>
</body>
<div class="container-fluid">
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
</div>
</html>