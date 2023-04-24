<?php 
session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");
						
if(isset($_POST['updatebtn'])){
	$deptname = $_POST['dept_name'];
	$deptdesc = $_POST['dept_desc'];
	$createdby = $_POST['created_by'];
	
	$query= "UPDATE department set dept_name='$deptname', dept_desc='$deptdesc', created_by='$createdby' WHERE dept_name='$deptname' ";
	
	$query_run= mysqli_query($conn, $query);
	
	if($query_run)
	{
		$_SESSION["success"] = "";
		header('location: department.php');
	}else{
		$_SESSION["status"] = "FAILED";
		header('location: department.php');
	}
	
	
}

?>