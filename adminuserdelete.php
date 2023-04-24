<?php
$conn = mysqli_connect("localhost", "root", "", "mycms");

if(isset($_POST['delete_btn'])){
	$namedel= $_POST['delete_name'];
	
	
	$query= "DELETE FROM user WHERE first_name='$namedel'";
	$query_run = mysqli_query($conn, $query);
	
	if($query_run){
		
		$_SESSION['success']= "SUCCESS";
		header('location: admin.php');
		
	}else{
		
		$_SESSION['status']= "FAILED ";
		header('location: admin.php');
		
	}
	
}

?>