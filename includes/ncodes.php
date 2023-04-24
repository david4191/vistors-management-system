<?php

$button =''; 
if(isset($_POST['first_name'])){
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$useremail = $_POST['user_email'];
$username = $_POST['username'];
$userstatus = $_POST['user_status'];
$role = $_POST['role'];
$userdept = $_POST['user_dept'];
$password = $_POST['password'];
}


//database connection

$conn= new mysqli('localhost','root','','mycms');
if($conn->connect_error){
	die('unable to connect:' .$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into user(first_name,last_name,user_email,username,user_status,role,user_dept,password)
	values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$firstname,$lastname,$useremail,$username,$userstatus,$role,$userdept,$password);
	$stmt->execute();
	
	
	$stmt->close();
	$conn->close();
}

?>


