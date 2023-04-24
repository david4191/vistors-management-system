<?php

$button =''; 
if(isset($_POST['sfirst_name'])){
$firstname = $_POST['sfirst_name'];
$lastname = $_POST['last_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phonenumber = $_POST['phone_number'];

$createdby = $_POST['created_by'];
}

//database connection

$conn= new mysqli('localhost','root','','mycms');
if($conn->connect_error){
	die('unable to connect:' .$conn->connect_error);
}
else{
	$stmt=$conn->prepare("INSERT INTO staff(sfirst_name, last_name, address, email, phone_number, created_by)
	values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$firstname,$lastname,$address,$email,$phonenumber,$createdby);
	$stmt->execute();
	
	
	$stmt->close();
	$conn->close();
}

?>