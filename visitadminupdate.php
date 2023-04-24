<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");
						
if(isset($_POST['updatebtn'])){
	$fullname = $_POST['vfull_name'];
	$vtype = $_POST['visit_type'];
	$timedate = $_POST['timedate'];
	$staff = $_POST['staff_id'];
	$vstatus = $_POST['visit_status'];
	$createdby= $_POST['created_by'];
	
	$query= "UPDATE expected set vfull_name='$fullname', visit_type='$vtype', timedate='$timedate', staff_id='$staff', visit_status='$vstatus', created_by='$createdby' WHERE vfull_name='$fullname' ";
	
	$query_run= mysqli_query($conn, $query);
	
	if($query_run)
	{
		$_SESSION["success"] = "";
		header('location: visitsadmin.php');
	}else{
		$_SESSION["status"] = "FAILED";
		header('location: visitsadmin.php');
	}
	
	
}

?>