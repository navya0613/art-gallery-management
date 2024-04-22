<?php
session_start();
$conn = mysqli_connect('localhost','root','','art');
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $size = $_POST['size'];
    $pic = $_FILES['pic']['name'];
    $pic_temp = $_FILES['pic']['tmp_name'];
    $pic_folder = 'img'.$pic;
    if(empty($name) || empty($artist) || empty($pic) || empty($genre) || empty($size)){
        $message[] = 'please fill out all';
    }
    else{
        $insert = "INSERT INTO arts(pic,aname,artist,genre,asize) VALUES('$pic','$name','$artist','$genre','$size')";
        $upload = mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($pic_temp,$pic_folder);
            $message[] = 'New product added successfully';
        }else{
            $message[] = 'could not add the product';
        }
    }
}
    if(isset($_GET['delete'])){
        $name = $_GET['delete'];
        mysqli_query($conn,"DELETE FROM arts where aname= '".$name."'");
        header('location:admin1.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th{
    
    padding: 15px;
    text-align:center;
    
}
td{
    
    padding: 15px;
    text-align:center;
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: white; /* Set the background to black */
    color: black; 
    font-family: Garamond, serif;/* Set the text color to white */
}
.input {
    padding: 5px;
    width: 250px;
    border: 1px solid black; /* Set border color to white */
    border-radius: 20px;
    background: white; /* Set input background to black */
    color: black;
    height:20px;/* Set input text color to white */
}
button {
    color: white; /* Button text color */
    border: none;
    width: 200px;
    border-radius: 20px;
    cursor: pointer;
    padding: 10px;
    background:black;
}
a{
	font-family: Garamond, serif; color: black;
}
.container {
        background-color: #ffffcc; /* Light yellow background color */
        border: 1px solid black; /* Light gray border */
        padding: 20px; /* Add some padding to the container */
        border-radius: 10px; /* Rounded corners for a nicer look */
        width: 600px; /* Set the width of the container as per your design */
        margin: 0 auto; /* Center the container horizontally */
    }

    </style>
</head>
<body>
    <div class="hi" style="background:black; color:white; height:40px; font-size:30px;"><center>ADMIN PAGE</center></div>
<div class="container-fluid border">
    <center><br>
    <h1>Insert New Art</h1>
    <div class="container">
    <form action="#" method="post" enctype="multipart/form-data">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="image">Select an image: </label>
        <input type = "file" accept="image/png, image/jpeg, image/jpg" name="pic" class="box"><br><br>
        Art name:&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" class="input" required><br><br>
        Artist:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <input type="text" name="artist" class="input" required><br><br>
        Genre:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <input type="text" name="genre" class="input" required><br><br>
        Size: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <input type="text" name="size" class="input" required><br><br>
        <br><br>
        <button type="submit" value="insert" name="insert">INSERT</button><br><br>
    </form><br>
    </div>
    <br><br><br>
    <?php
$select = mysqli_query($conn,"SELECT * from arts");

?>
<table class="product-display-table">
<thead>
<tr>
<th><h3>ART</h3></th>
<th><h3>NAME</h3></th>
<th><h3>ARTIST</h3></th>
<th><h3>GENRE</h3></th>
<th><h3>SIZE</h3></th>
<th colspan="2"><h3>ACTION</h3></th>
</tr>
</thead>
<?php
 while($row = mysqli_fetch_assoc($select)){
     ?>
     <tr>
        <td><img src="img/<?php echo $row['pic']; ?>" height="100" width="100" alt=""></td>
        <td><?php echo $row['aname']; ?></td>
        <td><?php echo $row['artist']; ?></td>
        <td><?php echo $row['genre']; ?></td>
        <td><?php echo $row['asize']; ?></td>
        <td>
        <a href="admin2.php?update=<?php echo $row['aname'];?>" ><button>UPDATE</button></a><br><br>      
        <a href="admin1.php?delete=<?php echo $row['aname'];?>"><button>DELETE</button></a>
        </td>
     </tr>
<?php
 };
 ?>
</table>
<br><br>
<a href="home.php"><button>GO TO HOME PAGE</button></a>
<br><br><br><br><br>
</center>
</div>
</body>
</html>
