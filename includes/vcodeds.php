<?php

$button =''; 
if(isset($_POST['dept_name'])){
$deptname = $_POST['dept_name'];
$deptdesc = $_POST['dept_desc'];
$createdby = $_POST['created_by'];
}

//database connection

$conn= new mysqli('localhost','root','','mycms');
if($conn->connect_error){
	die('unable to connect:' .$conn->connect_error);
}
else{
	$stmt=$conn->prepare("INSERT INTO department(dept_name, dept_desc, created_by)
	values(?,?,?)");
	$stmt->bind_param("sss",$deptname, $deptdesc,$createdby);
	$stmt->execute();
	
	
	$stmt->close();
	$conn->close();
}

?>