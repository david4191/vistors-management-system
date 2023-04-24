<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");
						
if(isset($_POST['updatebtn'])){
	$firstname = $_POST['full_name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone_number'];
	$createdby = $_POST['created_by'];
	
	$query= "UPDATE staff set full_name='$firstname', address='$address', email='$email', phone_number='$phone', created_by='$createdby' WHERE full_name='$firstname' ";
	
	$query_run= mysqli_query($conn, $query);
	
	if($query_run)
	{
		$_SESSION["success"] = "";
		header('location: staff.php');
	}else{
		$_SESSION["status"] = "FAILED";
		header('location: staff.php');
	}
	
	
}

?>