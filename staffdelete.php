<?php
$conn = mysqli_connect("localhost", "root", "", "mycms");

if(isset($_POST['delete_btn'])){
	$namedel= $_POST['delete_name'];
	
	
	$query= "DELETE FROM staff WHERE full_name='$namedel'";
	$query_run = mysqli_query($conn, $query);
	
	if($query_run){
		
		$_SESSION['success']= "SUCCESS";
		header('location: staff.php');
		
	}else{
		
		$_SESSION['status']= "FAILED ";
		header('location: staff.php');
		
	}
	
}

?>