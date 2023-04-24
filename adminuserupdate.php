<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");
						
if(isset($_POST['updatebtn'])){
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$useremail = $_POST['user_email'];
	$username = $_POST['username'];
	$userstatus = $_POST['user_status'];
	$role = $_POST['role'];
	$password = $_POST['password'];
	
	$query= "UPDATE user set first_name='$firstname', last_name='$lastname', user_email='$useremail', username='$username', user_status='$userstatus',role='$role', password='$password' WHERE first_name='$firstname' ";
	
	$query_run= mysqli_query($conn, $query);
	
	if($query_run)
	{
		$_SESSION["success"] = "";
		header('location: admin.php');
	}else{
		$_SESSION["status"] = "FAILED";
		header('location: admin.php');
	}
	
	
}

?>