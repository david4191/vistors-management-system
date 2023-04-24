<?php

if(!isset($_SESSION)){
	session_start();
}


$conn = mysqli_connect("localhost", "root", "", "mycms");

if(isset($_POST['vFull_name'])){
$fullname = $_POST['vFull_name'];
$email = $_POST['vEmail'];
$mobile = $_POST['vMobile'];
$occupation = $_POST['occupation'];
$office = $_POST['office'];
$createdby = $_POST['created_by'];
	
$name = $_SESSION['location'];

 
	
 
     // Insert record
     $query = "insert into visitors(image,vFull_name,vEmail,vMobile,occupation,office,created_by) values('".$name."','$fullname','$email','$mobile','$occupation','$office','$createdby')";
     mysqli_query($conn,$query);
  
 
}

?>
