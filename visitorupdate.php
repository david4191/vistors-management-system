<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");
						
if(isset($_POST['updatebtn'])){
	$fullname = $_POST['vFull_name'];
	$vemail = $_POST['vEmail'];
	$vmobile = $_POST['vMobile'];
	$office = $_POST['office'];
	$omobile = $_POST['office_mobile'];
	$createdby= $_POST['created_by'];
	
	$query= "UPDATE visitors set vFull_name='$fullname', vEmail='$vemail', vMobile='$vmobile', office='$office', office_mobile='$omobile', created_by='$createdby' WHERE vFull_name='$fullname' ";
	
	$query_run= mysqli_query($conn, $query);
	
	if($query_run)
	{
		$_SESSION["success"] = "";
		header('location: visitors.php');
	}else{
		$_SESSION["status"] = "FAILED";
		header('location: visitors.php');
	}
	
	
}

?>