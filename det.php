<?php
session_start();
$data = mysqli_connect('localhost','root','','art');
if(isset($_POST['details'])){
  $contact = $_POST['contact'];
  $country = $_POST['country'];
  $address = $_POST['address'];
  $postal= $_POST['postal'];
  if($contact !="" && $country  !="" && $address !="" && $postal!=""){
    $sql="insert into details values('$contact', '$country ', '$address', '$postal')";
    if($data->query($sql)){
        echo "Inserted";
        header("location:det.php");
        exit();
    }
    else{
        echo "unsuccessful";
    }
}
}
?>